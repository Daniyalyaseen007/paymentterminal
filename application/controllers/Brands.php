<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brands extends CI_Controller {

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
		$data["brands"] = $this->brands->allbrands();
		$data["slug"] 		= $slug;

		$this->load->view('include/header');
		$this->load->view('include/switcher');
		$this->load->view('include/side-menu');
		$this->load->view('brands/list',$data);
		$this->load->view('include/footer');
	}
	public function create(){
		$this->load->view('include/header');
		$this->load->view('include/switcher');
		$this->load->view('include/side-menu');
		$this->load->view('brands/create');
		$this->load->view('include/footer');
	}
	public function process(){
		//print_r($_POST);
		$config['upload_path'] = './brand-logo/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '*';
        $config['max_width'] = '*';
        $config['max_height'] = '*';
        $config['file_name'] = $_POST['BrandName'];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('BrandLogo')){
        	$error = array('error' => $this->upload->display_errors());
        }
        else{
        	$data = array('image_metadata' => $this->upload->data());
        	$image= $data["image_metadata"]["file_name"];
        	$array = array(
        		"BrandName"=>$_POST["BrandName"],
        		"BrandURL"=>$_POST["BrandURL"],
        		"BrandEmail"=>$_POST["BrandEmail"],
        		"BrandLogo"=>$image
        	);
        	$this->db->insert(" brands",$array);
			$insertid= $this->db->insert_id();
			if($insertid>0){
				redirect('brands/list/success','refresh');
			}
        //	print_r($data);
        }
	}
	public function edit($slug=null){
		
		if($slug=='' || $slug==null){
			$this->load->view('errors/404');
		}
		else{
			$array = array(
				"BrandID"=>$slug,
			);
			$data["SearchBrands"] = $this->brands->SearchBrands($array);
			$this->load->view('include/header');
			$this->load->view('include/switcher');
			$this->load->view('include/side-menu');
			$this->load->view('brands/edit',$data);
			$this->load->view('include/footer');
		}

	}
	public function edit_process(){
		$BrandID = $_POST["BrandID"];
		$config['upload_path'] = './brand-logo/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '*';
        $config['max_width'] = '*';
        $config['max_height'] = '*';
        $config['file_name'] = $_POST['BrandName'];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('BrandLogo')){
        	$error = array('error' => $this->upload->display_errors());
        }
        else{
        	$data = array('image_metadata' => $this->upload->data());
        	$image= $data["image_metadata"]["file_name"];
        	$array = array(
        		"BrandName"=>$_POST["BrandName"],
        		"BrandURL"=>$_POST["BrandURL"],
        		"BrandEmail"=>$_POST["BrandEmail"],
        		"BrandLogo"=>$image
        	);
        	$updateBrands = $this->brands->updateBrands($array,$BrandID);
			if($updateBrands){
				redirect('brands/list/success','refresh');
			}
			else{
				redirect('brands/list/failed','refresh');
			}
        }
	}
	public function delete(){
		$BrandID 		= $_POST["BrandID"];
		$array = array(
			"BStatus"=>'0'
		);
		$updateBrands = $this->brands->updateBrands($array,$BrandID);
		if($updateBrands){
			echo "success";
		}
		else{
			echo "failed";
		}
	}
}