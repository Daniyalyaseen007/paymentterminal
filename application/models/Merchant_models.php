<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Merchant_models extends CI_Model {
	public function allmerchants(){
		$this->db->select('*');
		$q = $this->db->get('merchant');
		$response = $q->result_array();
		return $response;
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
}
?>