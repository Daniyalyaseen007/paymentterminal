<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
        $this->load->library('form_validation');
        if(!$this->session->userdata('UserID')){
			redirect('login','refresh');
		}
		else if($this->session->userdata('OTPverify')==0){
			redirect('login/auth','refresh');
		}
		else{
			//redirect('dashboard','refresh');

		}
            // Your own constructor code
    }
    //
	public function list($slug=null)
	{
		$data["users"] 	= $this->users->getallUsers();
		$data["slug"] 		= $slug;
		$this->load->view('include/header');
		$this->load->view('include/switcher');
		$this->load->view('include/side-menu');
		$this->load->view('users/list',$data);
		$this->load->view('include/footer');


		/*$this->load->view('include/header');
		$this->load->view('include/switcher');
		$this->load->view('include/side-menu');
		$this->load->view('users/list');
		$this->load->view('include/footer');*/
	}
	public function create(){
		$this->load->view('include/header');
		$this->load->view('include/switcher');
		$this->load->view('include/side-menu');
		$this->load->view('users/create');
		$this->load->view('include/footer');
	}
	public function verifyuserNames(){
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('UserName', 'UserName', 'trim|required|is_unique[users.UserName]');
		if ($this->form_validation->run() == FALSE) {
			echo 1;
		}
		else{
			echo 0;
		}
	}
	public function process(){
		
		$usersArray = array(
			"UserName"=>$_POST["UserName"],
			"UserPass"=>md5($_POST["UserPass"]),
			"UserStatus"=>'1',
			"User_created_at"=>date('Y-m-d H:i:s'),
			);
		$this->db->insert("users",$usersArray);
		$insertid= $this->db->insert_id();
		if($insertid>0){
			$usersdetailsArray = array(
				"usersID"=>$insertid,
				"UserFirstName"=>$_POST["UserFirstName"],
				"UserLastName"=>$_POST["UserLastName"],
				"UserEmail"=>$_POST["UserEmail"],
				"UserRole"=>$_POST["UserRole"],
				"UserType"=>$_POST["UserType"],
				"UserLead"=>$_POST["UserLead"],
				"UserNumber"=>$_POST["UserNumber"],
				);
			$this->db->insert("usersdetails",$usersdetailsArray);
			$insertid= $this->db->insert_id();
			if($insertid>0){
				$array = array(
					"UserName"=>$_POST["UserName"],
					"UserPass"=>$_POST["UserPass"],
				);
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
				$data["details"] = $array;
				$msg = $this->load->view('mail/welcome',$data,true);
				$this->load->library('email',$config);
				$toemail = $_POST["UserEmail"];
				$this->email->to($toemail);
				$this->email->from('terminal@zenedgesystems.co');
				$this->email->subject('Welcome Email');
				$this->email->message($msg);
				if($this->email->send())
			    {
			    	 echo 'Email sent.';
			    }
			     else
			    {
			     show_error($this->email->print_debugger());
			    }
				redirect('users/list/success','refresh');
			}
			
		}
		else{
			return false;
		}
		/*
		/*if($insertid>0){
			redirect('services/list','refresh');
		}
		print_r($_POST);*/

	}
	public function email(){
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

		$this->email->to('daniyal.yaseen@nextacllc.org');
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
		/*die();
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
		$message = 'Email';
		
		$this->email->set_newline("\r\n");
	    $this->email->from('terminal@zenedgesystems.co'); // change it to yours
	    $this->email->to('daniyal.yaseen@nextacllc.org');// change it to yours
	    $this->email->subject('Verification Code');
	    $this->email->message($message);
	    if($this->email->send())
	    {
	    	 echo 'Email sent.';
	    }
	     else
	    {
	     show_error($this->email->print_debugger());
	    }*/
	}
	public function welcomeemail(){
		$mesg = $this->load->view('mail/welcome');
	}
}