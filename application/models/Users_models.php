<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_models extends CI_Model {
	public function getUsersbyCondition($condition){
		$this->db->select('*');
		$this->db->from('users a');
		$this->db->join('usersdetails b','b.DetailsID=a.UserID');
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
	public function getallUsers(){
		$this->db->select('*');
		$this->db->from('users a');
		$this->db->join('usersdetails b','b.usersID=a.UserID');
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
	public function VerifyOTP($condition){
		$this->db->select('*');
		$this->db->from('otp_auth');
		$this->db->where($condition);
		$this->db->order_by('AuthID','DESC');
		$this->db->limit('1');
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
	public function VerifyForgetOTP($condition){
		$this->db->select('*');
		$this->db->from('otp_auth_forget');
		$this->db->where($condition);
		$this->db->order_by('AuthID','DESC');
		$this->db->limit('1');
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
	
	public function updateOTP($data,$condition){
		$this->db->where('UserID', $condition);
	  	$this->db->update("otp_auth", $data);
	  	return true;
	}
	public function updateOTP2($data,$condition){
		$this->db->where('UserID', $condition);
	  	$this->db->update("otp_auth_forget", $data);
	  	return true;
	}
	
	public function updateUser($data,$condition){
		$this->db->where('UserID', $condition);
	  	$this->db->update("users", $data);
	  	return true;
	}
}
?>