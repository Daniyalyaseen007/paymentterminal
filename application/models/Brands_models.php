<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Brands_models extends CI_Model {
	public function allbrands(){
		$this->db->select('*');
		$this->db->from(' brands');
		$this->db->where("BStatus",'1');
		$this->db->order_by('BrandID','DESC');
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