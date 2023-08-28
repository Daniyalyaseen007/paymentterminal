<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Links extends CI_Controller {

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
	public function create()
	{
		$data["allmerchants"] = $this->merchants->allmerchants();
		$data["allbrands"] = $this->brands->allbrands();
		$data["allservices"] = $this->services->allservices();
		$data["allusers"] = $this->users->getallUsers();
		$data["allcurrency"] = $this->currency->getallcurrency();
		$this->load->view('include/header');
		$this->load->view('include/switcher');
		$this->load->view('include/side-menu');
		$this->load->view('links/create',$data);
		$this->load->view('include/footer');
	}
	public function process(){
		print_r($_POST);
		die();
		$condition = array(
				"MerchantID"=>$_POST["merchant"]
				);
		$data["merchantsbycondition"] = $this->merchants->merchantsbycondition($condition);
		$link =  $data["merchantsbycondition"][0]["paymentlink"];
		$this->load->helper('string');
		$tokenid = random_string('alnum', 32);
		$array = array(
				"merchant"=>$_POST["merchant"],
				"agent"=>$_POST["agent"],
				"brand"=>$_POST["brand"],
				"services"=>$_POST["services"],
				"currency"=>$_POST["currency"],
				"amount"=>$_POST["amount"],
				"tax"=>$_POST["tax"],
				"remaining_amount"=>$_POST["remaining_amount"],
				"LinkStatus"=>0,
				"tokenID"=>$tokenid,
				"paymentLink"=>$link."".$tokenid,
				"customerName"=>$_POST["customerName"],
				"source"=>$_POST["source"]
			);
		$this->db->insert("paymentlink",$array);
		$insertid= $this->db->insert_id();
		if($insertid>0){
			//print_r($data["payments"]);
			echo '<input style="display:none" type="text" value="'.$link."".$tokenid.'" id="myInput"><button onclick="myFunction()" class="btn btn-success">Created Click Here Copy The Link</button>';
			//redirect('payment/list','refresh');
		}
		else{
			echo "error";
		}
	}
	public function list($slug=null){
		$data["links"] 	= $this->links->alllinkswithjoin();
		$data["slug"] 		= $slug;
		$this->load->view('include/header');
		$this->load->view('include/switcher');
		$this->load->view('include/side-menu');
		$this->load->view('links/list',$data);
		$this->load->view('include/footer');
	}
	public function paid_list($slug=null){
		$data["links"] 	= $this->links->allpaidlinkswithjoin();
		$data["slug"] 		= $slug;
		$this->load->view('include/header');
		$this->load->view('include/switcher');
		$this->load->view('include/side-menu');
		$this->load->view('links/list',$data);
		$this->load->view('include/footer');
	}
}