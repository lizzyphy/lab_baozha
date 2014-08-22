<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class En_index extends  CI_Controller {
	function __construct()
 	{
 		parent::__construct();
 		$this->load->helper('url');	
 		$this->load->model('article_m');
		$this->load->model('link_m');
		$this->load->model('group_m');	
		$this->load->model('en_article_m');
 	}
	
	public function index()
	{
		$data['picture_url'] = $this->article_m->get_list_img(4, 0);
		$data['flash_url'] = $this->article_m->get_list_flash(1, 0);
		$data['articles'] = $this->en_article_m->get_list_news(5, 0, 118);
		$this->load->view('en_home_top');
		$this->load->view('en_home_left',$data);
		$this->load->view('en_home_right',$data);
		$this->load->view('en_footer');
	}
}
	
