<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

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
		$data["services"] 	= $this->services->allservices();
		$data["slug"] 		= $slug;
		$this->load->view('include/header');
		$this->load->view('include/switcher');
		$this->load->view('include/side-menu');
		$this->load->view('services/list',$data);
		$this->load->view('include/footer');
	}
	public function create(){
		$this->load->view('include/header');
		$this->load->view('include/switcher');
		$this->load->view('include/side-menu');
		$this->load->view('services/create');
		$this->load->view('include/footer');
	}
	public function process(){
		$this->db->insert("services",$_POST);
		$insertid= $this->db->insert_id();
		if($insertid>0){
			redirect('services/list','refresh');
		}
	}
	public function edit($slug=null){
		if($slug=='' || $slug==null){
			$this->load->view('errors/404');
		}
		else{
			$array = array(
				"ServiceID"=>$slug,
			);
			$data["SearchServices"] = $this->services->SearchServices($array);
			$this->load->view('include/header');
			$this->load->view('include/switcher');
			$this->load->view('include/side-menu');
			$this->load->view('services/edit',$data);
			$this->load->view('include/footer');
		}
		
	}
	public function edit_process(){
		$ServiceID 		= $_POST["ServiceID"];
		$ServiceName 	= $_POST["ServiceName"];
		$array = array(
			"ServiceName"=>$ServiceName
		);
		$update_service = $this->services->updateService($array,$ServiceID);
		if($update_service){
			redirect('services/list/success','refresh');
		}
		else{
			redirect('services/list/failed','refresh');
		}
	}
	public function delete(){
		$ServiceID 		= $_POST["ServiceID"];
		$array = array(
			"Ser_status"=>'0'
		);
		$update_service = $this->services->updateService($array,$ServiceID);
		if($update_service){
			echo "success";
		}
		else{
			echo "failed";
		}
	}
}