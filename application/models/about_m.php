<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 关于我们模型层
 * 
 * @author 风格独特
 */

class About_m extends CI_Model 
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
		$query = $this->db->get('about');
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
			$data['first_name'] = $arr1;		
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
			$first_name = $arr['name'];				
		}
		
		return $first_name;
	}
	
	public function get_list2($aid) 
	{
		$return = array();
		$this->db->where('pid', $aid);
		$this->db->order_by('tid ASC');
		$query = $this->db->get('article_type');
		if($query->num_rows() > 0) {
			$return = $query->result_array();
		}
		return $return;
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
	
	public function add($type, $title, $content) 
	{
		$data = array(
					'type'		=>	$type,
					'title'		=>	$title,
					'content'	=>	$content,
				);
		if($this->db->insert('about', $data) === FALSE) {
			return FALSE;
		}
		return TRUE;
	}
	
	public function edit($aid, $data) 
	{
		$aid = (int) $aid;
		$this->db->where('aid', $aid);
		$this->db->update('about', $data);
	}
	
	public function del($aid) 
	{
		$this->db->where('aid', $aid);
		if($this->db->delete('about') === FALSE) {
			return FALSE;
		}
		return TRUE;
	}
}
