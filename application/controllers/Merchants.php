<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merchants extends CI_Controller {

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
	public function list($slug=null)
	{
		$data["merchants"] = $this->merchants->allmerchants();
		$data["slug"] 		= $slug;
		$this->load->view('include/header');
		$this->load->view('include/switcher');
		$this->load->view('include/side-menu');
		$this->load->view('merchants/list',$data);
		$this->load->view('include/footer');
	}
	public function create(){
		$this->load->view('include/header');
		$this->load->view('include/switcher');
		$this->load->view('include/side-menu');
		$this->load->view('merchants/create');
		$this->load->view('include/footer');
	}
	public function process(){
		//print_r($_POST);
		$array = array(
			"M_DName"=>$_POST["M_DName"],
			"M_RName"=>$_POST["M_RName"],
			"Status"=>'1',
			"created_at"=>date('Y-m-d H:i:s'),
			"paymentlink"=>$_POST["paymentlink"],	
		);
		$text = '';
		foreach($_POST["fieldname"] as $key=>$fieldname){
			$value = $_POST["fieldvalue"][$key];
			$text .= $fieldname.'='.$value.' ';
			
			//$array[]
		}
		$array["MerDetails"] = $text;
		$this->db->insert("merchant",$array);
		$insertid = $this->db->insert_id();
		redirect('merchants/list/success','refresh');
	}
}