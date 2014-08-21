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
	
	public function group()
	{
		$gid = $this->input->get('gid');
		$data['article'] = $this->en_article_m->get_group($gid);
		$this->load->view('en_home_top');
		$this->load->view('en_navi');
		$this->load->view('en_content',$data);
		$this->load->view('en_footer');
	}
	
	public function article()
	{
		$gid = $this->input->get('gid');
		$data['article'] = $this->en_article_m->get_group($gid);
		$this->load->view('en_home_top');
		$this->load->view('en_navi');
		$this->load->view('en_content',$data);
		$this->load->view('en_footer');
	}
	
	public function list_group()
	{
		$type = $this->input->get('type');
		$per_page = 20;
		$p = (int) $this->input->get('p');
		if($p < 1) {
			$p = 1;
		}
		$data['articles'] = $this->en_article_m->get_list($per_page, $per_page * ($p - 1), $type);
		$data['title'] = 'Main Members of Staff';
		$data['page_html'] =  $this->_page_init($per_page);
		$this->load->view('en_home_top');
		$this->load->view('en_navi');
		$this->load->view('en_list_group',$data);
		$this->load->view('en_footer');
	}
	
	public function list_news()
	{
		$type = $this->input->get('type');
		$per_page = 20;
		$p = (int) $this->input->get('p');
		if($p < 1) {
			$p = 1;
		}
		$data['articles'] = $this->en_article_m->get_list_news($per_page, $per_page * ($p - 1), $type);
		$data['page_html'] =  $this->_page_init($per_page);
		$this->load->view('en_home_top');
		$this->load->view('en_navi');
		$this->load->view('en_list_content',$data);
		$this->load->view('en_footer');
	}
	
	private function _page_init($per_page)
	{
		$this->load->library('pagination');
		$type = (int) $this->input->get('type');
		if($type < 1) {
			$type = 2;
		}
	
		$config['total_rows'] = $this->en_article_m->get_num($type);
		$config['per_page'] = $per_page;
		$config['base_url'] = base_url('en_article/list_content/?type=' . $type);
		$config['num_links'] = 20;
		$config['query_string_segment'] = 'p';
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['prev_link'] = 'Previous';
		$config['next_link'] = 'Next';
		$config['use_page_numbers'] = TRUE;
	
		$this->pagination->initialize($config);
		return $this->pagination->create_links();
	}
}