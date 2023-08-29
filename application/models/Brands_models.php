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
	public function SearchBrands($condition){
		$this->db->select('*');
		$this->db->from('brands');
		$this->db->where($condition);
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
	public function updateBrands($data,$condition){
		$this->db->where('BrandID', $condition);
	  	$this->db->update("brands", $data);
	  	return true;
	}
}
?>