<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 证书管理的模型层
 * 
 * @author 风格独特
 */

class Cert_m extends CI_Model 
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function get($cid)
	{
		$cid = (int) $cid;
		$this->db->where('cid', $cid);
		$query = $this->db->get('cert');
		if($query->num_rows() > 0) {
			return $query->row_array();
		}
		return FALSE;
	}
	
	public function find($name, $card) 
	{
		$this->db->where('name', $name);
		$this->db->where('card', $card);
		$query = $this->db->get('cert');
		if($query->num_rows() > 0) {
			return $query->row_array();
		}
		return FALSE;
	}
	
	public function get_list($limit, $offset = 0) 
	{
		$return = array();
		$this->db->order_by('cid DESC');
		$query = $this->db->get('cert', $limit, $offset);
		if($query->num_rows() > 0) {
			$return = $query->result_array();
		}
		return $return;
	}
	
	public function get_num() 
	{
		return $this->db->count_all_results('cert');
	}
	
	public function add($data) 
	{
		if($this->db->insert('cert', $data) === FALSE) {
			return FALSE;
		}
		return TRUE;
	}
	
	public function edit($cid, $data) 
	{
		$cid = (int) $cid;
		$this->db->where('cid', $cid);
		$this->db->update('cert', $data);
	}
	
	public function del($cid) 
	{
		$this->db->where('cid', $cid);
		if($this->db->delete('cert') === FALSE) {
			return FALSE;
		}
		return TRUE;
	}
}
