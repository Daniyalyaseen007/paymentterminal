<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Role_models extends CI_Model {
	public function allroles(){
		$this->db->select('*');
		$q = $this->db->get('roles');
		$response = $q->result_array();
		return $response;
	}
}
?>