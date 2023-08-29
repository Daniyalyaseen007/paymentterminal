<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

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
	public function sales_sheet($slug=null)
	{
		$data["links"] 	= $this->links->alllinkswithjoin();
		$data["slug"] 		= $slug;
		$this->load->view('include/header');
		$this->load->view('include/switcher');
		$this->load->view('include/side-menu');
		$this->load->view('report/sales-sheet',$data);
		$this->load->view('include/footer');
	}
	public function Service($ID=null){
		$array = array("ServiceID"=>$ID);
		$child= $this->services->SearchServices($array);
        return $child;
	}
}