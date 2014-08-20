<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 新闻类别管理控制器
 * 
 * @author 风格独特
 */

class Article_type extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('admin_user_m');
		if($this->admin_user_m->check_login() === FALSE) {
			redirect('d=admin_en&c=index');
		}
		$this->load->model('article_type_en_m');
		$this->load->helper('form');
	}
	
	public function index()
	{
		$data['types'] = $this->article_type_en_m->get_option();
		
		$this->load->view('admin_en/header.php', array('username' => $this->admin_user_m->user->username));
		$this->load->view('admin_en/left_navi.php');
		$this->load->view('admin_en/article_type.php', $data);
		$this->load->view('admin_en/footer.php');
	}
	
	public function edit() 
	{
		$tid = (int) $this->input->get('tid');
		$pid = (int) $this->input->post('pid');
		$name = $this->input->post('name', TRUE);
		if($tid < 1 || $pid < 0) {
			redirect('d=admin_en&c=article_type');
		}
		$this->article_type_en_m->edit_type($tid, $name, $pid);
		redirect('d=admin_en&c=article_type');
	}
	
	public function add() 
	{
		$pid = (int) $this->input->post('pid');
		$name = $this->input->post('name', TRUE);
		if($name === FALSE || $pid < 0) {
			redirect('d=admin_en&c=article_type');
		}
		$this->article_type_en_m->add_type($name, $pid);
		redirect('d=admin_en&c=article_type');
	}
	
	public function del() 
	{
		$tid = (int) $this->input->get('tid');
		if($tid < 0) {
			redirect('d=admin_en&c=article_type');
		}
		$this->article_type_en_m->del_type($tid);
		redirect('d=admin_en&c=article_type');
	}
	
	public function edit_v() 
	{
		$tid = (int) $this->input->get('tid');
		if($tid < 0) {
			redirect('d=admin_en&c=article_type');
		}
		$name = $this->article_type_en_m->get_name($tid);
		
		$data['pid'] = $this->article_type_en_m->get_parent($tid);
		$data['name'] = $name;
		$data['form_url'] = 'd=admin_en&c=article_type&m=edit&tid=' . $tid;
		$data['types'] = $this->article_type_en_m->get_option();
		
		$this->load->view('admin_en/header.php', array('username' => $this->admin_user_m->user->username));
		$this->load->view('admin_en/left_navi.php');
		$this->load->view('admin_en/article_type_add.php', $data);
		$this->load->view('admin_en/footer.php');
	}
	
	public function add_v() 
	{
		$data['pid'] = 0;
		$data['name'] = '';
		$data['form_url'] = 'd=admin_en&c=article_type&m=add';
		$data['types'] = $this->article_type_en_m->get_option();
		
		$this->load->view('admin_en/header.php', array('username' => $this->admin_user_m->user->username));
		$this->load->view('admin_en/left_navi.php');
		$this->load->view('admin_en/article_type_add.php', $data);
		$this->load->view('admin_en/footer.php');
	}
}