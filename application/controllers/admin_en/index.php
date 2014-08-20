<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller 
{	
	/**
	 * 构造函数，防止index函数变成构造函数
	 */
	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('admin_user_m');
		$this->load->library('captcha_np');
		$this->load->helper('form');
		$this->load->helper('url');
	}

	/**
	 * 首页登录界面
	 */
	public function index() 
	{
		if($this->admin_user_m->check_login() === FALSE) {
			$data['error'] = '';
			$this->load->view('admin_en/login.php', $data);
		} else {
			redirect('d=admin_en&c=home');
		}
	}
	
	/**
	 * 验证码模块
	 */
	public function captcha() 
	{
		$this->captcha_np->setStyle(1);
		$this->captcha_np->setBgColor(array(0, 23, 33));
		$this->captcha_np->setFontColor(array(255, 255, 235));
		
		$this->session->set_userdata('admin_img_check', $this->captcha_np->getStr());
		$this->session->set_userdata('admin_img_checka', $this->captcha_np->getStr());
		$this->captcha_np->display();
	}
	
	/**
	 * 登录验证模块
	 */
	public function login() 
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$usercheck = $this->input->post('usercheck');
		
		$img_check = $this->session->userdata('admin_img_check');
		//exit($img_check);
		$this->session->unset_userdata('admin_img_check');
		
		if($img_check != $usercheck) {
			$data['error'] = '验证码错误';
			$this->load->view('admin_en/login.php', $data);
		} else if($this->admin_user_m->login($username, $password) > 0) {
			redirect('d=admin_en&c=home');
		} else {
			$data['error'] = '用户名或密码错误';
			$this->load->view('admin_en/login.php', $data);
		}
	}
	
	/**
	 * 管理员退出
	 */
	public function logout()
	{
		$this->admin_user_m->logout();
		redirect('d=admin_en&c=index');
	}
}
