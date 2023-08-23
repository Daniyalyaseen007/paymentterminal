<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services_models extends CI_Model {
	public function allservices(){
		$this->db->select('*');
		$this->db->from('services');
		$this->db->where("Ser_status",'1');
		$this->db->order_by('ServiceID','DESC');
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
	public function SearchServices($condition){
		$this->db->select('*');
		$this->db->from('services');
		$this->db->where($condition);
		$this->db->order_by('ServiceID','DESC');
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
	public function updateService($data,$condition){
		$this->db->where('ServiceID', $condition);
	  	$this->db->update("services", $data);
	  	return true;
	}
}
?>