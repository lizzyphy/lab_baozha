<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 学生报名的控制类
 * 
 * @author 风格独特
 */

class Student extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('admin_user_m');
		if($this->admin_user_m->check_login() === FALSE) {
			redirect('d=admin&c=index');
		}
		$this->load->model('student_m');
	}
	
	public function index() 
	{
		$per_page = 20;
		$type = (int) $this->input->get('type');
		if($type == FALSE) {
			$type = Student_m::S_GONGKAI;
		}
		
		$p = (int) $this->input->get('p');
		if($p < 1) {
			$p = 1;
		}
		
		$data['students'] = $this->student_m->get_list($per_page, ($p - 1) * $per_page, $type);
		$data['page_html'] =  $this->_page_init($per_page);
		
		$this->load->view('admin/header.php', array('username' => $this->admin_user_m->user->username));
		$this->load->view('admin/left_navi.php');
		$this->load->view('admin/student.php', $data);
		$this->load->view('admin/footer.php');
	}
	
	public function del() 
	{
		$type = (int) $this->input->get('type');
		$sid = (int) $this->input->get('sid');
		if($sid < 1) {
			redirect('d=admin&c=student');
		}
		$this->student_m->del($sid);
		redirect('d=admin&c=student&type=' . $type);
	}
	
	public function view()
	{
		$sid = (int) $this->input->get('sid');
		$data = $this->student_m->get($sid);
				
		$this->load->view('admin/header.php', array('username' => $this->admin_user_m->user->username));
		$this->load->view('admin/left_navi.php');
		$this->load->view('admin/student_view.php', $data);
		$this->load->view('admin/footer.php');
	}

	private function _page_init($per_page)
	{
		$this->load->library('pagination');
	
		$type = $this->input->get('type');
		if($type == FALSE) {
			$type = Student_m::S_GONGKAI;
		}
		$config['total_rows'] = $this->student_m->get_num($type);
	
		$config['per_page'] = $per_page;
		$config['base_url'] = 'index.php?d=admin&c=student&type=' . $type;
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