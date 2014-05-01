<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cert extends CI_Controller 
{	
	/**
	 * 构造函数
	 */
	public function __construct() 
	{
		parent::__construct();
		session_start();
		$this->load->model('cert_m');
		$this->load->helper('form');
		$this->load->library('captcha_np');
	}

	/**
	 * 首页
	 */
	public function index() 
	{
		$data['error'] = '';
		$this->load->view('header.php');
		$this->load->view('img_1.php', array('img'	=>	5));
		$this->load->view('cert.php', $data);
		$this->load->view('footer.php');
	}
	
	public function search() 
	{
		$check = isset($_SESSION['cert_check']) ? $_SESSION['cert_check'] : '';
		unset($_SESSION['cert_check']);

		// 验证码检测
		$cert_check = $this->input->post('cert_check');
		if($cert_check != $check) {
			$data['error'] = '验证码错误';
			
			$this->load->view('header.php');
			$this->load->view('img_1.php', array('img'	=>	5));
			$this->load->view('cert.php', $data);
			$this->load->view('footer.php');
			return ;
		}
		
		$name = trim($this->input->post('name', TRUE));
		$card = trim($this->input->post('card', TRUE));
		
		$cert_find = $this->cert_m->find($name, $card);
		if($cert_find != FALSE) {
			$this->load->view('header.php');
			$this->load->view('img_1.php', array('img'	=>	5));
			$this->load->view('cert_view.php', $cert_find);
			$this->load->view('footer.php');
			return ;
		} else {
			$data['error'] = '没有该证书信息';
				
			$this->load->view('header.php');
			$this->load->view('img_1.php', array('img'	=>	5));
			$this->load->view('cert.php', $data);
			$this->load->view('footer.php');
			return ;
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
		$_SESSION['cert_check'] = $this->captcha_np->getStr();
		$this->captcha_np->display();
	}
}
