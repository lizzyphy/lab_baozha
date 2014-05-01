<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apply extends CI_Controller 
{	
	/**
	 * 构造函数
	 */
	public function __construct() 
	{
		parent::__construct();
		session_start();
		$this->load->model('student_m');
		$this->load->model('courses_m');
		$this->load->helper('form');
		$this->load->library('captcha_np');
	}

	/**
	 * 首页
	 */
	public function index() 
	{
		$cid = (int) $this->input->get('cid');
		
		$course = $this->courses_m->get($cid);
		if($course == FALSE) {
			header('Location: ' . base_url('course/'));
			exit;
		}
		$data['course'] = $course['name'];
		$data['cid'] = $cid;
		$data['error'] = '';

		$this->load->view('header.php');
		$this->load->view('img_1.php', array('img'	=>	3));
		$this->load->view('left_course.php');
		$this->load->view('apply.php', $data);
		$this->load->view('footer.php');
	}
	
	public function add() 
	{
		$cid = (int) $this->input->get('cid');
		$check = isset($_SESSION['apply_check']) ? $_SESSION['apply_check'] : '';
		unset($_SESSION['apply_check']);
		$course = $this->courses_m->get($cid);
		if($course == FALSE) {
			header('Location: ' . base_url('course/'));
			exit;
		}
		$data['course'] = $course['name'];
		$data['cid'] = $cid;

		// 验证码检测
		$apply_check = $this->input->post('apply_check');
		if($apply_check == FALSE) {
			header('Location: ' . base_url('course/'));
			exit;
		}
		if($apply_check != $check) {
			$data['error'] = '验证码错误';
			
			$this->load->view('header.php');
			$this->load->view('img_1.php', array('img'	=>	3));
			$this->load->view('left_course.php');
			$this->load->view('apply.php', $data);
			$this->load->view('footer.php');
			return ;
		}
		
		$data_add['cid'] = $course['cid'];
		$data_add['type'] = $course['type'];
		
		$data_add['email'] = $this->input->post('email', TRUE);
		$data_add['name'] = $this->input->post('name', TRUE);
		$data_add['card'] = $this->input->post('card', TRUE);
		$data_add['sex'] = $this->input->post('sex', TRUE);
		$data_add['birth_y'] = $this->input->post('birth_y', TRUE);
		$data_add['birth_m'] = $this->input->post('birth_m', TRUE);
		$data_add['birth_d'] = $this->input->post('birth_d', TRUE);
		$data_add['account'] = $this->input->post('account', TRUE);
		$data_add['city'] = $this->input->post('city', TRUE);
		$data_add['phone'] = $this->input->post('phone', TRUE);
		$data_add['worktime'] = $this->input->post('worktime', TRUE);
		$data_add['company'] = $this->input->post('company', TRUE);
		$data_add['bumen'] = $this->input->post('bumen', TRUE);
		$data_add['zhiwu'] = $this->input->post('zhiwu', TRUE);
		$data_add['suozaidi'] = $this->input->post('suozaidi', TRUE);
		$data_add['chuangye'] = $this->input->post('chuangye', TRUE);
		$data_add['shangshi'] = $this->input->post('shangshi', TRUE);
		$data_add['shouru'] = $this->input->post('shouru', TRUE);
		$data_add['gongsi'] = $this->input->post('gongsi', TRUE);
		$data_add['gongsi_guobie'] = $this->input->post('gongsi_guobie', TRUE);
		$data_add['gongsi_qita'] = $this->input->post('gongsi_qita', TRUE);
		$data_add['yx1_name'] = $this->input->post('yx1_name', TRUE);
		$data_add['yx1_major'] = $this->input->post('yx1_major', TRUE);
		$data_add['yx1_degree'] = $this->input->post('yx1_degree', TRUE);
		$data_add['yx1_year'] = $this->input->post('yx1_year', TRUE);
		$data_add['yx1_month'] = $this->input->post('yx1_month', TRUE);
		$data_add['yx1_biye'] = $this->input->post('yx1_biye', TRUE);
		$data_add['yx1_xuewei'] = $this->input->post('yx1_xuewei', TRUE);
		$data_add['yx2_name'] = $this->input->post('yx2_name', TRUE);
		$data_add['yx2_major'] = $this->input->post('yx2_major', TRUE);
		$data_add['yx2_degree'] = $this->input->post('yx2_degree', TRUE);
		$data_add['yx2_year'] = $this->input->post('yx2_year', TRUE);
		$data_add['yx2_month'] = $this->input->post('yx2_month', TRUE);
		$data_add['yx2_biye'] = $this->input->post('yx2_biye', TRUE);
		$data_add['yx2_xuewei'] = $this->input->post('yx2_xuewei', TRUE);
		$data_add['yx3_name'] = $this->input->post('yx3_name', TRUE);
		$data_add['yx3_major'] = $this->input->post('yx3_major', TRUE);
		$data_add['yx3_degree'] = $this->input->post('yx3_degree', TRUE);
		$data_add['yx3_year'] = $this->input->post('yx3_year', TRUE);
		$data_add['yx3_month'] = $this->input->post('yx3_month', TRUE);
		$data_add['yx3_biye'] = $this->input->post('yx3_biye', TRUE);
		$data_add['yx3_xuewei'] = $this->input->post('yx3_xuewei', TRUE);
		
		if($this->student_m->add($data_add) != FALSE) {
			$data = array();
			$data['success'] = TRUE;
			
			$this->load->view('header.php');
			$this->load->view('img_1.php', array('img'	=>	3));
			$this->load->view('left_course.php');
			$this->load->view('apply_notice.php', $data);
			$this->load->view('footer.php');
			return ;
		} else {
			$data['error'] = '申请错误';
				
			$this->load->view('header.php');
			$this->load->view('img_1.php', array('img'	=>	3));
			$this->load->view('left_course.php');
			$this->load->view('apply.php', $data);
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
		$_SESSION['apply_check'] = $this->captcha_np->getStr();
		$this->captcha_np->display();
	}
}
