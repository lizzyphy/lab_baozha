<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 团队管理模型层
 * 
 * @author 
 */

class Group_m extends CI_Model 
{
	//const GROUP_TEACHER	=	1;
	
	//const GROUP_STUDENT	=	2;
	
	//const GROUP_ALUMN	=	3;
	
	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
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
	
	public function get($gid)
	{
		$gid = (int) $gid;
		$this->db->where('gid', $gid);
		$query = $this->db->get('group');
		if($query->num_rows() > 0) {
			return $query->row_array();
		}
		return FALSE;
	}
	
	public function get_list($limit, $offset = 0, $type = 0)
	{
		$return = array();
		if($type != 0) {
			$this->db->where('type', $type);
		}
		
		$this->db->order_by('gid ASC');
		$query = $this->db->get('group', $limit, $offset);
		$return = $query->result_array();
		return $return;
	}
	
	public function get_typename($type)
	{
		if($type == Group_m::GROUP_TEACHER) {
			return '师资团队';
		}
		if($type == Group_m::GROUP_STUDENT) {
			return '学员风采';
		}
		if($type == Group_m::GROUP_ALUMN) {
			return '经管校友';
		}
		return '';
	}
	
	public function get_num($type = 0)
	{
		$this->db->where('type', $type);
		return $this->db->count_all_results('group');
	}
	
	public function add($order, $type, $title, $avatar, $content)
	{
		$data = array(
				'order'		=>	$order,
				'type'		=>	$type,
				'title'		=>	$title,
				'avatar'	=>	$avatar,
				'content'	=>	$content,
		);
		if($this->db->insert('group', $data) === FALSE) {
			return FALSE;
		}
		return TRUE;
	}
	
	public function edit($gid, $data)
	{
		$gid = (int) $gid;
		$this->db->where('gid', $gid);
		$this->db->update('group', $data);
	}
	
	public function del($gid)
	{
		$this->db->where('gid', $gid);
		if($this->db->delete('group') === FALSE) {
			return FALSE;
		}
		return TRUE;
	}
}
