<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Controller 
{	
	/**
	 * 构造函数
	 */
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('courses_m');
	}

	/**
	 * 首页
	 */
	public function index() 
	{
		$cid = (int) $this->input->get('cid');
		$data['course'] = $this->courses_m->get($cid);
		if($data['course'] == FALSE) {
			$this->type();
		} else {
			$this->load->view('header.php');
			$this->load->view('img_1.php', array('img'	=>	2));
			$this->load->view('left_course.php');
			$this->load->view('course.php', $data);
			$this->load->view('footer.php');
		}
	}
	
	public function type() 
	{
		$per_page = 20;
		$type = (int) $this->input->get('type');
		$p = (int) $this->input->get('p');
		if($p < 1) {
			$p = 1;
		}
		if($type < 1) {
			$type = 1;
		}
		
		$data['courses'] = $this->courses_m->get_list($per_page, $per_page * ($p - 1), $type);
		$data['page_html'] =  $this->_page_init($per_page);
		$data['title'] = $this->courses_m->get_typename($type);
		
		$this->load->view('header.php');
		$this->load->view('img_1.php', array('img'	=>	2));
		$this->load->view('left_course.php');
		$this->load->view('course_list.php', $data);
		$this->load->view('footer.php');
	}
	
	private function _page_init($per_page)
	{
		$this->load->library('pagination');
	
		$type = (int) $this->input->get('type');
		if($type < 1) {
			$type = 1;
		}
		
		$config['total_rows'] = $this->courses_m->get_num($type);
	
		$config['per_page'] = $per_page;
		$config['base_url'] = base_url('article/type/?type=' . $type);
		$config['num_links'] = 20;
		$config['query_string_segment'] = 'p';
		$config['first_link'] = '首页';
		$config['last_link'] = '末页';
		$config['prev_link'] = '上一页';
		$config['next_link'] = '下一页';
		$config['use_page_numbers'] = TRUE;
	
		$this->pagination->initialize($config);
		return $this->pagination->create_links();
	}
}
