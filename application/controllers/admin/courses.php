<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 课程添加的的控制类
 * 
 * @author 风格独特
 */

class Courses extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('admin_user_m');
		if($this->admin_user_m->check_login() === FALSE) {
			redirect('d=admin&c=index');
		}
		$this->load->model('courses_m');
		$this->load->helper('form');
	}
	
	public function index() 
	{
		$per_page = 20;
		$type = (int) $this->input->get('type');
		$p = (int) $this->input->get('p');
		if($p < 1) {
			$p = 1;
		}
		if($type == FALSE) {
			$type = Courses_m::C_GONGKAI;
		}
		$data['courses'] = $this->courses_m->get_list($per_page, $per_page * ($p - 1), $type);
		$data['type'] = $type;
		$data['page_html'] = $this->_page_init($per_page);
		
		$this->load->view('admin/header.php', array('username' => $this->admin_user_m->user->username));
		$this->load->view('admin/left_navi.php');
		$this->load->view('admin/courses.php', $data);
		$this->load->view('admin/footer.php');
	}
	
	public function add()
	{	
		$type =(int) $this->input->get('type');
		$level = $this->input->post('level', TRUE);
		$name = $this->input->post('name', TRUE);
		$price = $this->input->post('price', TRUE);
		$time = $this->input->post('time', TRUE);
		$content = $this->input->post('ue_content');
		
		$this->courses_m->add($name, $type, $level, $price, $time, $content);
		redirect('d=admin&c=courses&type=' . $type);
	}
	
	public function edit()
	{
		$cid = (int) $this->input->get('cid');
		$data['type'] = (int) $this->input->get('type');
		$data['level'] = $this->input->post('level', TRUE);
		$data['name'] = $this->input->post('name', TRUE);
		$data['price'] = $this->input->post('price', TRUE);
		$data['time'] = $this->input->post('time', TRUE);
		$data['content'] = $this->input->post('ue_content');

		$this->courses_m->edit($cid, $data);
		redirect('d=admin&c=courses&type=' . $data['type']);
	}
	
	public function del()
	{
		$type = (int) $this->input->get('type');
		$cid = (int) $this->input->get('cid');
		if($cid < 1) {
			redirect('d=admin&c=courses');
		}
		$this->courses_m->del($cid);
		redirect('d=admin&c=courses&type=' . $type);
	}
	
	public function add_v()
	{
		$type = (int) $this->input->get('type');
		if($type == FALSE) {
			$type = Courses_m::C_GONGKAI;
		}
		$data['type'] = $type;
		$data['level'] = '';
		$data['name'] = '';
		$data['price'] = '';
		$data['time'] = '';
		$data['content'] = '';
		$data['form_url'] = 'd=admin&c=courses&m=add&type=' . $type;
		
		$this->load->view('admin/header.php', array('username' => $this->admin_user_m->user->username));
		$this->load->view('admin/left_navi.php');
		$this->load->view('admin/courses_add.php', $data);
		$this->load->view('admin/footer.php');
	}
	
	public function edit_v()
	{
		$cid = (int) $this->input->get('cid');
		$course = $this->courses_m->get($cid);
		if($course === FALSE) {
			redirect('d=admin&c=courses');
		}
		$data['type'] = $course['type'];
		$data['name'] = $course['name'];
		$data['level'] = $course['level'];
		$data['price'] = $course['price'];
		$data['time'] = $course['time'];
		$data['content'] = $course['content'];
		$data['form_url'] = 'd=admin&c=courses&m=edit&cid=' . $cid . '&type=' . $course['type'];
		
		$this->load->view('admin/header.php', array('username' => $this->admin_user_m->user->username));
		$this->load->view('admin/left_navi.php');
		$this->load->view('admin/courses_add.php', $data);
		$this->load->view('admin/footer.php');
	}
	
	private function _page_init($per_page)
	{
		$this->load->library('pagination');
	
		$type = $this->input->get('type');
		if($type === FALSE) {
			$type = 0;
		}
		$config['total_rows'] = $this->courses_m->get_num($type);
	
		$config['per_page'] = $per_page;
		$config['base_url'] = 'index.php?d=admin&c=courses&type=' . $type;
		$config['num_links'] = 10;
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
