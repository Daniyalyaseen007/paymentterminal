<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Links_models extends CI_Model {
	public function alllinks(){
		$this->db->select('*');
		$this->db->from('paymentlink');
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
	public function alllinkswithjoin(){
		$this->db->select('*');
		$this->db->from('paymentlink a');
		$this->db->join('merchant b','b.MerchantID=a.merchant');
		$this->db->join('brands c','c.BrandID=a.brand');
		$this->db->join('usersdetails d','d.usersID=a.agent');
		$this->db->join('services e','e.ServiceID=a.services');
		$this->db->join('currency f','f.CurrencyID=a.currency');
		$this->db->order_by('a.PaymentID','DESC');
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
	public function allpaidlinkswithjoin(){
		$this->db->select('*');
		$this->db->from('paymentlink a');
		$this->db->join('merchant b','b.MerchantID=a.merchant');
		$this->db->join('brands c','c.BrandID=a.brand');
		$this->db->join('usersdetails d','d.usersID=a.agent');
		$this->db->join('services e','e.ServiceID=a.services');
		$this->db->join('currency f','f.CurrencyID=a.currency');
		$this->db->where("a.LinkStatus","1");
		$this->db->order_by('a.PaymentID','DESC');
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
	public function allpaidlinkswithjoincondition($condition){
		$this->db->select('*');
		$this->db->from('paymentlink a');
		$this->db->join('merchant b','b.MerchantID=a.merchant');
		$this->db->join('brands c','c.BrandID=a.brand');
		$this->db->join('usersdetails d','d.usersID=a.agent');
		$this->db->join('services e','e.ServiceID=a.services');
		$this->db->join('currency f','f.CurrencyID=a.currency');
		$this->db->where($condition);
		$this->db->order_by('a.PaymentID','DESC');
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