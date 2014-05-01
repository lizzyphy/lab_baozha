<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 学生报名的模型层
 * 
 * @author 风格独特
 */

class Student_m extends CI_Model 
{
	const S_GONGKAI = 1;
	
	const S_ZAIZHI = 2;
	
	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function get($sid)
	{
		$sid = (int) $sid;
		$this->db->where('sid', $sid);
		$query = $this->db->get('student');
		if($query->num_rows() > 0) {
			return $query->row_array();
		}
		return FALSE;
	}
	
	public function get_list($limit, $offset = 0, $type = 0)
	{
		$this->load->model('courses_m');
		
		$i = 0;
		$return = array();
		
		if($type != 0) {
			$this->db->where('type', $type);
		}
		
		$this->db->order_by('sid ASC');
		$query = $this->db->get('student', $limit, $offset);
		foreach ($query->result_array() as $row) {
			$return[$i] = $row;
			$return[$i]['course'] = $this->courses_m->get_name($row['cid']);
			++$i;
		}
		return $return;
	}
	
	public function get_num($type = 0) 
	{
		$this->db->where('type', $type);
		return $this->db->count_all_results('student');
	}
	
	public function add($data)
	{
		if($this->db->insert('student', $data) === FALSE) {
			return FALSE;
		}
		return TRUE;
	}
	
	public function edit($sid, $data) 
	{
		$sid = (int) $sid;
		$this->db->where('sid', $sid);
		$this->db->update('student', $data);
	}
	
	public function del($sid) 
	{
		$this->db->where('sid', $sid);
		if($this->db->delete('student') === FALSE) {
			return FALSE;
		}
		return TRUE;
	}
}
