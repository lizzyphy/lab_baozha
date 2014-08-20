<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class En_article extends CI_Controller 
{	
	/**
	 * 构造函数
	 */
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('en_article_m');
	}
	
	public function index()
	{
		$type = $this->input->get('type');
		$data['article'] = $this->en_article_m->get($type);
		$this->load->view('en_home_top');
		$this->load->view('en_navi');
		$this->load->view('en_content',$data);
		$this->load->view('en_footer');
	}
}