<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Role_models extends CI_Model {
	public function allroles(){
		$this->db->select('*');
		$this->db->from('roles');
		$this->db->order_by('RoleID','DESC');
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
	public function getrole($condition){
		$this->db->select('*');
		$this->db->from('roles');
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