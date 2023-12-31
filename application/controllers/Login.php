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
				$config = Array(
				  'protocol' => 'smtp',
				  'smtp_host' => 'ssl://mail.zenedgesystems.co',
				  'smtp_port' => 465,
				  'smtp_user' => 'terminal@zenedgesystems.co', // change it to yours
				  'smtp_pass' => 'RfqxZ9HY+IBI', // change it to yours
				  'mailtype' => 'html',
				  'charset' => 'iso-8859-1',
				  'wordwrap' => TRUE
				);
				$UserID= $this->session->userdata('UserID');
				$array_user = array(
					"UserID"=>$UserID,
					"AuthStatus"=>'1'
				);
				$data["otp"] = $this->users->VerifyOTP($array_user);
				$this->load->view('mail/otp',$data);
				$mesg = $this->load->view('mail/otp',$data,true);
				$this->load->library('email',$config);
				$toemail = $this->session->userdata('UserEmail');
				$this->email->to($toemail);
				$this->email->from('terminal@zenedgesystems.co');
				$this->email->subject('Verification Code');
				$this->email->message($mesg);
				if($this->email->send())
			    {
			    	 echo 'Email sent.';
			    }
			     else
			    {
			     show_error($this->email->print_debugger());
			    }
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
	public function forgot_password($slug=null){
		if(isset($_GET["invalid-user"])){
			$data["error"] = $_GET;
			$this->load->view('forget-form',$data);
		}
		else{
			$this->load->view('forget-form');
		}
		
	}
	public function mailtoforget(){
		$email = $_POST["Email"];
		$condition = array("UserEmail"=>$email);
		$data["user"] = $this->users->getUsersbyCondition($condition);
		if(!empty($data["user"])){
			$this->load->helper('string');
			$otpcode = random_string('alnum', 6);
			$UserID= $data["user"][0]['UserID'];
			$arrayotp = array(
				"UserID"=>$UserID,
				"AuthCode"=>$otpcode,
				"AuthStatus"=>'1'
			);
			$this->db->insert("otp_auth_forget",$arrayotp);
			$insertid= $this->db->insert_id();
			if($insertid>0){
				$config = Array(
				  'protocol' => 'smtp',
				  'smtp_host' => 'ssl://mail.zenedgesystems.co',
				  'smtp_port' => 465,
				  'smtp_user' => 'terminal@zenedgesystems.co', // change it to yours
				  'smtp_pass' => 'RfqxZ9HY+IBI', // change it to yours
				  'mailtype' => 'html',
				  'charset' => 'iso-8859-1',
				  'wordwrap' => TRUE
				);
				$array_user = array(
					"UserID"=>$UserID,
					"AuthStatus"=>'1'
				);
				$_SESSION["OTPUser"] = $UserID;
				$data["otp"] = $this->users->VerifyForgetOTP($array_user);
				$this->load->view('mail/otp',$data);
				$mesg = $this->load->view('mail/otp',$data,true);
				$this->load->library('email',$config);
				$toemail = $data["user"][0]['UserEmail'];
				$this->email->to($toemail);
				$this->email->from('terminal@zenedgesystems.co');
				$this->email->subject('Verification Code');
				$this->email->message($mesg);
				if($this->email->send())
			    {
			    	redirect('forgot-password/otp','refresh');
			    }
			     else
			    {
			     show_error($this->email->print_debugger());
			    }
			}
			//die();
			//
		}
		else{
			redirect('forgot-password/error?invalid-user','refresh');
		}
		//getUsersbyCondition
	}
	public function forgot_otp(){
		$this->load->view('verifyotp');
	}
	public function verifyforgetotps(){
		$UserID= $_SESSION["OTPUser"];
		$array_user = array(
				"UserID"=>$UserID,
				"AuthCode"=>$_POST["AuthCode"],
				"AuthStatus"=>'1'
			);
		$users = $this->users->VerifyForgetOTP($array_user);
		if(empty($users)){
			echo "Invalid OTP";
			//redirect('login/error/otp-failed','refresh');
			//$_SESSION["OTPverify"] = 0;
		}
		else{
			$this->load->view('forget-pass');

			//$_SESSION["OTPverify"] = 1;
			//redirect('dashboard','refresh');
		}
	}
	public function changepassword(){
		//password
		$UserID= $_SESSION["OTPUser"];
		$array = array("UserPass"=>md5($_POST["password"]));
		$update_otp = $this->users->updateUser($array,$UserID);
		$array2 = array("AuthStatus"=>'0');
		$update_otp2 = $this->users->updateOTP2($array2,$UserID);
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
        $this->session->sess_destroy();
		redirect('main','refresh');
	}
}
