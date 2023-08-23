<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
    {
        
        parent::__construct();
        
        
            // Your own constructor code
    }
	public function index()
	{
	    if(!$this->session->userdata('UserID')){
			$this->load->view('login');
		}
		else if($this->session->userdata('OTPverify')==0){
			redirect('login/auth','refresh');
		}
		else{
			redirect('dashboard','refresh');

		}
		
	}
	public function process(){
		$user = $_POST["username"];
		$password = md5($_POST["password"]);
		$condition = array('UserName'=>$user,"UserStatus"=>'1',"UserPass"=>$password);
		$users = $this->users->getUsersbyCondition($condition);
		
		if(empty($users)){
			redirect('login/error/auth-failed','refresh');
		}
		else{
			$this->load->helper('string');
			$otpcode = random_string('alnum', 6);
			$this->session->set_userdata($users[0]);
			$UserID= $this->session->userdata('UserID');
			$arrayotp = array(
				"UserID"=>$UserID,
				"AuthCode"=>$otpcode,
				"AuthStatus"=>'1'
			);
			$this->db->insert("otp_auth",$arrayotp);
			$insertid= $this->db->insert_id();
			if($insertid>0){
				redirect('login/auth','refresh');
			}
			
		}
	}
	public function auth(){
		$otp_status= $this->session->userdata('OTPverify');

		if($otp_status==0){
			$this->load->view('auth');
		}
		else{
			$_SESSION["OTPverify"] = 1;
		}
		//
	}
	public function verifyotp(){
		$UserID= $this->session->userdata('UserID');
		$array_user = array(
				"UserID"=>$UserID,
				"AuthCode"=>$_POST["AuthCode"],
				"AuthStatus"=>'1'
			);
		$users = $this->users->VerifyOTP($array_user);
		if(empty($users)){
			redirect('login/error/otp-failed','refresh');
			$_SESSION["OTPverify"] = 0;
		}
		else{
			$_SESSION["OTPverify"] = 1;
			redirect('dashboard','refresh');
		}
	}
	public function sign_out(){
		$UserID= $this->session->userdata('UserID');
		$array = array("AuthStatus"=>'0');
		$update_otp = $this->users->updateOTP($array,$UserID);
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
        $this->session->sess_destroy();
		redirect('main','refresh');
	}
	public function error($slug=null){
		if($slug=='auth-failed'){
			$data["msg"] = 'Invalid User Name and Password Please Try Again';
			$this->load->view('login',$data);
		}
		if($slug=='otp-failed'){
			$data["msg"] = 'OTP Not verified Please Try Again';
			$this->load->view('auth',$data);
		}
	}
}
