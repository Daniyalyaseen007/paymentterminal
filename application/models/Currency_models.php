<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Currency_models extends CI_Model {
	public function getallcurrency(){
		$this->db->select('*');
		$this->db->from('currency');
		$this->db->where("CurrencyStatus",'1');
		$this->db->order_by('CurrencyID','DESC');
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