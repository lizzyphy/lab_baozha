<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller 
{	
	/**
	 * 构造函数
	 */
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('about_m');
	}

	/**
	 * 首页
	 */
	public function index() 
	{
		$aid = (int) $this->input->get('aid');
		if($aid==110)
		{
			$data['article'] = $this->about_m->get($aid);
			$this->load->view('homeheader.php');
			$this->load->view('img_new.php');
			$this->load->view('left_navi_new.php');
			$this->load->view('contact.php', $data);
			$this->load->view('homefoot.php');
		}
		else
		{
			$data['article'] = $this->about_m->get($aid);
			$data['name'] = $this->about_m->get_second_name($aid);
			$abouts = $this->about_m->get_list();	
			if($aid == FALSE) {
				$data['article'] = $abouts[0];	
			}
			
			$this->load->view('homeheader.php');
			$this->load->view('img_new.php');
			if($aid == 2 || $aid == 3 || $aid == 8 || $aid == 9 || $aid == 17 || $aid == 18 ) {
				$this->load->view('left_navi_new.php');
			}
			 elseif($aid == 83 || $aid == 84 || $aid == 85 || $aid == 87 || $aid == 88|| $aid == 89 || $aid == 90 ) {
				$this->load->view('left_policy.php');
			}
			elseif($aid == 60 || $aid == 61 || $aid == 62 || $aid == 63){
				$this->load->view('left_navi_yxgl.php');	
			}
			elseif($aid == 43 || $aid == 44 || $aid == 45){
				$this->load->view('left_subject.php');	
			}
			else{
				$this->load->view('left_direction.php');	
			}
			
			$this->load->view('about.php', $data);
			$this->load->view('homefoot.php');
		}

	}
}
