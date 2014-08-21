<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class En_article_m extends CI_Model 
{
	/**
	 * 构造函数
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function get($type)
	{
		$this->db->where('type', $type);
		$query = $this->db->get('article_en');
		if($query->num_rows() == 1) {
			$row = $query->row_array();
			$query->free_result();
			return array(
					'type'		=>	$row['type'],
					'type_name'	=>	$this->get_name($row['type']),
					'content'	=>	$row['content'],
			);
		}
		
		return FALSE;
	}
	
	public function get_group($gid)
	{
		$this->db->where('gid', $gid);
		$query = $this->db->get('group_en');
		if($query->num_rows() == 1) {
			$row = $query->row_array();
			$query->free_result();
			return array(
					'type_name'	=>	'Main Members of Staff',
					'content'	=>	$row['content'],
			);
		}
	
		return FALSE;
	}
	
	public function get_name($tid)
	{
		$this->db->where('tid', $tid);
		$this->db->select('name');
		$query = $this->db->get('article_type_en');
		$type_name = $query->row_array();
		return $type_name['name'];
	}
	
	public function get_list($limit, $offset = 0, $type = 0, $order = 'gid ASC')
	{
		$i = 0;
		$this->db->select('gid,order,title');
		$this->db->order_by($order);
		$query = $this->db->get('group_en', $limit, $offset);
		foreach ($query->result_array() as $row) {
			$return[$i] = $row;
			++$i;
		}
		return $return;
	}
	
	public function get_list_news($limit, $offset = 0, $type = 0, $order = 'type ASC,aid DESC,add_date DESC')
	{
		$this->load->model('article_type_en_m');
		$i = 0;
		$return = array();
		if($type > 0) {
			$this->db->where('type', (int) $type);
		}
		$this->db->select('aid, type, title, add_time, add_date, add_user');
		$this->db->order_by($order);
		$query = $this->db->get('article_en', $limit, $offset);
		foreach ($query->result_array() as $row) {
			$return[$i] = $row;
			$return[$i]['type_name'] = $this->article_type_en_m->get_name($row['type']);
			++$i;
		}
		return $return;
	}
	
	public function get_num($type = 0, $name_keyword = '', $content_keyword = '')
	{
		if($type != 0) {
			$this->db->where('type', $type);
		}
		if($name_keyword != '') {
			$this->db->like('title', $name_keyword);
		}
		if($content_keyword != '') {
				
		}
		return $this->db->count_all_results('article_en');
	}
}