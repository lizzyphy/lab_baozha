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
		$this->load->model('article_m');
	}
	
	public function index()
	{
		$type = (int)$this->input->get('type');
		$this->load->view('en_home_top');
		$this->load->view('en_navi');
		if (in_array($type, array(106,107,108,109,110,111,112,113,115,116,117,120)))
		{
			$data['article'] = $this->en_article_m->get($type);
			$this->load->view('en_content',$data);
		}
		elseif ($type == 114)
		{
			$per_page = 2;
			$p = (int) $this->input->get('p');
			if($p < 1) {
				$p = 1;
			}
			$url = 'en_article?type=114';
			$data['articles'] = $this->en_article_m->get_list($per_page, $per_page * ($p - 1), $type);
			$data['title'] = 'Main Members of Staff';
			$data['page_html'] =  $this->_page_init_group($per_page,$url);
			$this->load->view('en_list_group',$data);
		} 
		elseif ($type == 118)
		{
			$per_page = 20;
			$p = (int) $this->input->get('p');
			if($p < 1) {
				$p = 1;
			}
			$url = 'en_article?type=118';
			$data['articles'] = $this->en_article_m->get_list_news($per_page, $per_page * ($p - 1), $type);
			$data['title'] = 'News&Trends';
			$data['page_html'] =  $this->_page_init($per_page,$url);
			$this->load->view('en_list_content',$data);
		}
		elseif ($type == 119)
		{
			$per_page = 2;
			$p = (int) $this->input->get('p');
			if($p < 1) {
				$p = 1;
			}
			$url = 'en_article?type=119';
			$data['title'] = 'Photos';
			$data['photos'] = $this->en_article_m->get_list_photo($per_page, $per_page * ($p - 1), $type);
			$data['page_html'] =  $this->_page_init($per_page,$url);
			$this->load->view('en_list_photo',$data);
		}
		$this->load->view('en_footer');
	}
	
	/*public function photo()
	{
		$type = $this->input->get('type');
		$per_page = 2;
		$p = (int) $this->input->get('p');
		if($p < 1) {
			$p = 1;
		}
		$data['title'] = 'Photos';
		$data['photos'] = $this->en_article_m->get_list_photo($per_page, $per_page * ($p - 1), $type);
		$data['page_html'] =  $this->_page_init_photo($per_page);
		$this->load->view('en_home_top');
		$this->load->view('en_navi');
		$this->load->view('en_list_photo',$data);
		$this->load->view('en_footer');
	}*/
	
	public function article()
	{
		$aid = $this->input->get('aid');
		$data['article'] = $this->en_article_m->get_article($aid);
		$data['article']['type_name'] = 'News & Trends';
		$this->load->view('en_home_top');
		$this->load->view('en_navi');
		$this->load->view('en_news_content',$data);
		$this->load->view('en_footer');
	}
	
	/*public function list_group()
	{
		$type = $this->input->get('type');
		$per_page = 2;
		$p = (int) $this->input->get('p');
		if($p < 1) {
			$p = 1;
		}
		$data['articles'] = $this->en_article_m->get_list($per_page, $per_page * ($p - 1), $type);
		$data['title'] = 'Main Members of Staff';
		$data['page_html'] =  $this->_page_init_group($per_page);
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
	}*/
	
	
	public function flash_show()
	{
		$data['flash_url'] = $this->article_m->get_list_flash(1, 0);
		$data['title'] = 'Video';
		$this->load->view('en_home_top');
		$this->load->view('en_navi');
		$this->load->view('en_video',$data);
		$this->load->view('en_footer');
		
	}
	
	private function _page_init_group($per_page,$url)
	{
		$this->load->library('pagination');
		$config['total_rows'] = $this->en_article_m->get_num_group();
		$config['per_page'] = $per_page;
		$config['base_url'] = base_url($url);
		$config['num_links'] = 20;
		$config['query_string_segment'] = 'p';
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['prev_link'] = '<';
		$config['next_link'] = '>';
		$config['use_page_numbers'] = TRUE;
		$config['cur_tag_open'] = ' <a class="pcurrent">'; // 当前页开始样式
		$config['cur_tag_close'] = '</a>';
		$this->pagination->initialize($config);
		return $this->pagination->create_links();
	}
	
	private function _page_init($per_page ,$url)
	{
		$this->load->library('pagination');
		$type = (int) $this->input->get('type');
		if($type < 1) {
			$type = 2;
		}
	
		$config['total_rows'] = $this->en_article_m->get_num($type);
		$config['per_page'] = $per_page;
		$config['base_url'] = base_url($url);
		$config['num_links'] = 20;
		$config['query_string_segment'] = 'p';
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['prev_link'] = '<';
		$config['next_link'] = '>';
		$config['use_page_numbers'] = TRUE;
		$config['cur_tag_open'] = '<a class="pcurrent">'; // 当前页开始样式
		$config['cur_tag_close'] = '</a>'; 


	
		$this->pagination->initialize($config);
		return $this->pagination->create_links();
	}
}