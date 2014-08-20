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
	public function get_name($tid)
	{
		$this->db->where('tid', $tid);
		$this->db->select('name');
		$query = $this->db->get('article_type_en');
		$type_name = $query->row_array();
		return $type_name['name'];
	}
}