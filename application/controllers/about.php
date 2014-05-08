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
		
		$data['article'] = $this->about_m->get($aid);
		$data['name'] = $this->about_m->get_second_name($aid);

		$abouts = $this->about_m->get_list();
		
		if($aid == FALSE) {
			$data['article'] = $abouts[0];	
		}
		
		$this->load->view('homeheader.php');
		$this->load->view('img_new.php');
		$this->load->view('left_navi_new.php');
		$this->load->view('about.php', $data);
		$this->load->view('homefoot.php');
	}
}
