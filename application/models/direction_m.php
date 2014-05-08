<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 关于我们模型层
 * 
 * @author lizzy
 */

class Direction_m extends CI_Model 
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function get($aid)
	{
		$aid = (int) $aid;
		$this->db->where('aid', $aid);
		$query = $this->db->get('direction');
		if($query->num_rows() > 0) {
			return $query->row_array();
		}
		return FALSE;
	}
	
	public function get_second_name($aid)
	{
		$aid = (int) $aid;
		$this->db->select('pid,name');
		$this->db->where('tid', $aid);
		$query = $this->db->get('article_type');
		if($query->num_rows() > 0) {
			//return $query->row_array();
			$arr=$query->row_array();
			$data['second_name'] = $arr['name'];
			$pid = $arr['pid'];
			$arr1 = $this->get_first_name($pid);
			$data['first_name'] = $arr1['first_name'];
				
		}
		
		return $data;
	}
	
	public function get_first_name($pid)
	{
		$pid = (int) $pid;
		$this->db->select('name');
		$this->db->where('tid', $pid);
		$query = $this->db->get('article_type');
		if($query->num_rows() > 0) {
			//return $query->row_array();
			$arr=$query->row_array();
			$data['first_name'] = $arr['name'];				
		}
		
		return $data;
	}
	
	public function get_list() 
	{
		$return = array();
		$this->db->order_by('aid ASC');
		$query = $this->db->get('about');
		if($query->num_rows() > 0) {
			$return = $query->result_array();
		}
		return $return;
	}
	
}
