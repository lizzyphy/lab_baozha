<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Group extends CI_Controller 
{	
	/**
	 * 构造函数
	 */
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('group_m');
		$this->load->library('pagination');
	}

	/**
	 * 首页
	 */
	public function index() 
	{
		$gid = (int) $this->input->get('gid');
		$type = (int) $this->input->get('type');
		$data['type'] = $type;
		$data['name'] = $this->group_m->get_second_name($type);
		$data['article'] = $this->group_m->get($gid);
		$this->load->view('homeheader.php');
		$this->load->view('left_group.php');
		$this->load->view('group3.php', $data);
		$this->load->view('homefoot.php');
		
	}
	
	
	public function type() 
	{
		$per_page = 1;
		$type = (int) $this->input->get('type');
		$gid = $type;
		$p = (int) $this->input->get('p');
		if($p < 1) {
			$p = 1;
		}
		if($type < 1) {
			$type = 1;
		}
		$data['type'] = $type;
		$data['article'] = $this->group_m->get_list($per_page, $per_page * ($p - 1), $type);
		$data['page_html'] =  $this->_page_init($per_page,$type);
		$data['name'] = $this->group_m->get_second_name($gid);
		
		$this->load->view('homeheader.php');
		$this->load->view('img_new.php');
		$this->load->view('left_group.php');
		if($type = 30 || $type =33 ||$type = 34)
		{
			$this->load->view('group2.php', $data);
		}
		else {
			$this->load->view('group.php', $data);
		}
		$this->load->view('homefoot.php');
	}
	
	private function _page_init($per_page,$type)
	{
		$this->load->library('pagination');
	
		//$type = (int) $this->input->get('type');
		if($type < 1) {
			$type = 1;
		}
		
		$config['total_rows'] = $this->group_m->get_num($type);
	
		$config['per_page'] = $per_page;
		$config['base_url'] = base_url('group/type/?type=' . $type);
		$config['num_links'] = 20;
		$config['query_string_segment'] = 'p';
		$config['first_link'] = '首页';
		$config['last_link'] = '末页';
		$config['prev_link'] = '上一页';
		$config['next_link'] = '下一页';
		$config['use_page_numbers'] = TRUE;
	
		$this->pagination->initialize($config);
		 $key = $this->pagination->create_links();
		 return $key;
	}
}
