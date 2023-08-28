<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

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
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function checklink($slug=null){
	    $token = $_POST["token"];
	    $sql3 ="SELECT * FROM paymentlink where tokenID='$token'";
        $query3 = $this->db->query($sql3);
        $row3 = $query3->result();
        if(!empty($row3)){
            echo 1;
        }
        else{
            echo 0;
        }
	}
	public function getamount($slug=null){
	    $token = $_POST["token"];
	    $sql3 ="SELECT * FROM paymentlink where tokenID='$token'";
        $query3 = $this->db->query($sql3);
        $row3 = $query3->result();
        if(!empty($row3)){
            echo $row3[0]->amount;
        }
        else{
            echo 0;
        }
	}
	public function getdata(){
	    $token = $_POST["token"];
	    $sql3 ="SELECT * FROM paymentlink where tokenID='$token'";
        $query3 = $this->db->query($sql3);
        $row3 = $query3->result();
        if(!empty($row3)){
            foreach($row3 as $data){
                $dataRows[] = $data;
            }
            //echo serialize($dataRows);
            $array = array(
                "PaymentID"=>$row3[0]->PaymentID,
                );
            echo json_encode($row3,true);
            //echo $row3[0]->amount;
        }
        else{
            echo 0;
        }
	}
	public function getservice($slug=null){
	    $token = $_POST["token"];
	    $sql3 ="SELECT services.ServiceName FROM paymentlink inner join services on services.ServiceID=paymentlink.services where tokenID='$token'";
        $query3 = $this->db->query($sql3);
        $row3 = $query3->result();
        if(!empty($row3)){
            echo $row3[0]->ServiceName;
        }
        else{
            echo 0;
        }
	}
	public function getbrand($slug=null){
	    $token = $_POST["token"];
	    $sql3 ="SELECT brands.BrandName FROM paymentlink inner join brands on brands.BrandID=paymentlink.brand where tokenID='$token'";
        $query3 = $this->db->query($sql3);
        $row3 = $query3->result();
        if(!empty($row3)){
            echo $row3[0]->BrandName;
        }
        else{
            echo 0;
        }
	}
	public function getcurrency($slug=null){
	    $token = $_POST["token"];
	    $sql3 ="SELECT * FROM paymentlink where tokenID='$token'";
        $query3 = $this->db->query($sql3);
        $row3 = $query3->result();
        if(!empty($row3)){
            echo $row3[0]->currency;
        }
        else{
            echo 0;
        }
	}
	public function gettax(){
	    $token = $_POST["token"];
	    $sql3 ="SELECT * FROM paymentlink where tokenID='$token'";
        $query3 = $this->db->query($sql3);
        $row3 = $query3->result();
        if(!empty($row3)){
            echo $row3[0]->tax;
        }
        else{
            echo 0;
        }
	}
	public function getservicebyid(){
	    $serviceid = $_POST["serviceid"];
	    $sql3 ="SELECT * FROM services where ServiceID='$serviceid'";
        $query3 = $this->db->query($sql3);
        $row3 = $query3->result();
        if(!empty($row3)){
            echo $row3[0]->ServiceName;
        }
        else{
            echo 0;
        }
	}
	public function getbrandbyid(){
	    $brandid = $_POST["brandid"];
	    $sql3 ="SELECT * FROM brands where BrandID='$brandid'";
        $query3 = $this->db->query($sql3);
        $row3 = $query3->result();
        if(!empty($row3)){
            echo $row3[0]->BrandName;
        }
        else{
            echo 0;
        }
	}
	public function getmerchantbyid(){
	    $MerchantID = $_POST["MerchantID"];
	    $sql3 ="SELECT * FROM merchant where MerchantID='$MerchantID'";
        $query3 = $this->db->query($sql3);
        $row3 = $query3->result();
        if(!empty($row3)){
            echo json_encode($row3,true);
        }
        else{
            echo 0;
        }
	}
	public function getcurrencybyid(){
	    $CurrencyID = $_POST["CurrencyID"];
	    $sql3 ="SELECT * FROM currency where CurrencyID='$CurrencyID'";
        $query3 = $this->db->query($sql3);
        $row3 = $query3->result();
        if(!empty($row3)){
            echo $row3[0]->CurrencySign;
        }
        else{
            echo 0;
        }
	}
	
	public function getpublickey(){
	    $token = $_POST["token"];
	    $sql3 ="SELECT * FROM paymentlink where tokenID='$token'";
        $query3 = $this->db->query($sql3);
        $row3 = $query3->result();
        if(!empty($row3)){
            $merchant = $row3[0]->merchant;
            $sql4 = "SELECT * FROM merchant where MerchantID='$merchant'";
            $query4 = $this->db->query($sql4);
            $row4 = $query4->result();
            print_r($row4[0]->MerDetails);
            $data = explode(",",$row4[0]->MerDetails);
            /*foreach($data as $key=>$value){
                $data2 = explode("=",$value);
                $d["data"] =  array();
                array_push($d["data"],$data2);
                //return $data2;
                print_r($data);
            }
            */
            //print_r();
        }
        else{
            echo 0;
        }
	}
	public function updatedata(){
	    $token = $_POST["tokenID"];
	    $pt_name = $_POST["pt_name"];
	    $pt_email = $_POST["email"];
	    $pt_number = $_POST["number"];
	    $array = array(
	        "customerName"=>$pt_name,
	        "CustomerEmail"=>$pt_email,
	        "CustomerNumber"=>$pt_number,
	        "LinkStatus"=>1,
	        );
	    
	  $this->db->where('tokenID', $token);
	  $this->db->update("paymentlink", $array);
	  echo $this->db->last_query();
	}
	public function updatedata2(){
	    $token = $_POST["tokenID"];
	    $pt_name = $_POST["pt_name"];
	    $pt_email = $_POST["email"];
	    $pt_number = $_POST["number"];
	    $array = array(
	        "customerName"=>$pt_name,
	        "CustomerEmail"=>$pt_email,
	        "CustomerNumber"=>$pt_number,
	        "LinkStatus"=>3,
	        );
	    
	  $this->db->where('tokenID', $token);
	  $this->db->update("paymentlink", $array);
	  echo $this->db->last_query();
	}
	public function sendemail(){
		$tokenID = $_POST["tokenID"];
		$array = array("a.tokenID"=>$tokenID);
		$data["links"] 	= $this->links->allpaidlinkswithjoincondition($array);
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
		$to = $data["links"][0]["UserEmail"];
		$mesg = $this->load->view('mail/paymentemail',$data,true);
		$this->load->library('email',$config);
		$this->email->to($to);
		$this->email->bcc('sales@nextacllc.org');
		$this->email->from('terminal@zenedgesystems.co');
		$this->email->subject('Payment Confirm');
		$this->email->message($mesg);
		if($this->email->send())
	    {
	    	 echo 'Email sent.';
	    }
	     else
	    {
	     show_error($this->email->print_debugger());
	    }
	}
	public function getbrandsdetails(){
		$token = $_POST["token"];
	    $sql3 ="SELECT brands.BrandName FROM paymentlink inner join brands on brands.BrandID=paymentlink.brand where tokenID='$token'";
        $query3 = $this->db->query($sql3);
        $row3 = $query3->result();
        if(!empty($row3)){
            echo json_encode($row3,true);
        }
        else{
            echo 0;
        }
	}
}
