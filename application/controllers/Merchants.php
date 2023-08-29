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
	public function details(){
		$response = '';
		$response = '<table class="table table-striped table-responsive table-bordered">';
		$array = array("MerchantID"=>$_POST['MerchantID']);
		$data["merchants"] = $this->merchants->merchantsbycondition($array);
		$details = explode(",",$data["merchants"][0]["MerDetails"]);
		//$details = explode("=",$details);
		$response .= '<tr>';
		$r1 = '';
		$r2 = '';
		foreach($details as $detail){
			
			
			$moredetail = explode("=",$detail);
			$r1 .= '<td>'.$moredetail[0].'</td>';
			$r2 .= '<td>'.$moredetail[1].'</td>';

		}
		$response .= $r1;
		$response .= '</tr>';
		$response .= '<tr>';
		$response .= $r2;

		$response .= '</tr>';

		$response .= '</table>';
		echo $response;
	}
	public function edit($slug=null){
		$array = array("MerchantID"=>$slug);
		$data["merchants"] = $this->merchants->merchantsbycondition($array);
		$this->load->view('include/header');
		$this->load->view('include/switcher');
		$this->load->view('include/side-menu');
		$this->load->view('merchants/edit',$data);
		$this->load->view('include/footer');
	}
	public function edit_process(){
		$MerchantID = $_POST["MerchantID"];
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
			$text .= $fieldname.'='.$value.',';
			
			//$array[]
		}
		$text = rtrim($text, ',');
		$array["MerDetails"] = $text;
		$update_merchant = $this->merchants->updateMerchant($array,$MerchantID);
		if($update_merchant){
			redirect('merchants/list/success','refresh');
		}
		else{
			redirect('merchants/list/failed','refresh');
		}
		//$this->db->insert("merchant",$array);
		//$insertid = $this->db->insert_id();
		//redirect('merchants/list/success','refresh');
	}
	public function delete(){
		$MerchantID 		= $_POST["MerchantID"];
		$array = array(
			"Status"=>'0'
		);
		$update_merchant = $this->merchants->updateMerchant($array,$MerchantID);
		if($update_merchant){
			echo "success";
		}
		else{
			echo "failed";
		}
	}
}