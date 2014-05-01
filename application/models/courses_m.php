<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 课程管理模型层
 * 
 * @author 风格独特
 */

class Courses_m extends CI_Model 
{
	const C_GONGKAI	=	1;
	
	const C_ZAIZHI	=	2;
	
	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function get($cid)
	{
		$cid = (int) $cid;
		$this->db->where('cid', $cid);
		$query = $this->db->get('courses');
		if($query->num_rows() > 0) {
			return $query->row_array();
		}
		return FALSE;
	}
	
	public function get_name($cid) 
	{
		$cid = (int) $cid;
		$this->db->where('cid', $cid);
		$query = $this->db->get('courses');
		if($query->num_rows() > 0) {
			$row =  $query->row_array();
			return $row['name'];
		}
		return '';
	}
	
	public function get_typename($type) 
	{
		if($type == Courses_m::C_GONGKAI) {
			return '公开课程';
		}
		if($type == Courses_m::C_ZAIZHI) {
			return '在职研究生课程';
		}
		return '';
	}
	
	public function get_list($limit, $offset = 0, $type = 1)
	{
		$return = array();
		$this->db->where('type', $type);
		$this->db->order_by('cid DESC');
		$query = $this->db->get('courses', $limit, $offset);
		if($query->num_rows() > 0) {
			$return = $query->result_array();
		}
		return $return;
	}
	
	public function get_num($type = 0)
	{
		if($type != 0) {
			$this->db->where('type', $type);
		}
		return $this->db->count_all_results('courses');
	}
	
	public function add($name, $type, $level, $price, $time, $content)
	{
		$data = array(
				'name'		=>	$name,
				'type'		=>	$type,
				'level'		=>	$level,
				'price'		=>	$price,
				'time'		=>	$time,
				'content'	=>	$content,
				'add_time'	=>	time(),
		);
		if($this->db->insert('courses', $data) === FALSE) {
			return FALSE;
		}
		return TRUE;
	}
	
	public function edit($cid, $data)
	{
		$cid = (int) $cid;
		$this->db->where('cid', $cid);
		$this->db->update('courses', $data);
	}
	
	public function del($cid)
	{
		$this->db->where('cid', $cid);
		if($this->db->delete('courses') === FALSE) {
			return FALSE;
		}
		return TRUE;
	}
}
