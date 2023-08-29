<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Merchant_models extends CI_Model {
	public function allmerchants(){
		$this->db->select('*');
		$this->db->from('merchant');
		$this->db->where("Status",'1');
		$this->db->order_by('MerchantID','DESC');
		$q = $this->db->get();
		if($q->num_rows() != 0)
	    {
	        return $q->result_array();
	    }
	    else
	    {
	        return false;
	    }
	}
	public function merchantsbycondition($condition){
		$this->db->select('*');
		$this->db->from('merchant');
		$this->db->where($condition);
		$q = $this->db->get();
		if($q->num_rows() != 0)
	    {
	        return $q->result_array();
	    }
	    else
	    {
	        return false;
	    }
	}
	public function updateMerchant($data,$condition){
		$this->db->where('MerchantID', $condition);
	  	$this->db->update("merchant", $data);
	  	return true;
	}
}
?>