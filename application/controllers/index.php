<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Index extends  CI_Controller {
	function __construct()
 	{
 		parent::__construct();
 		$this->load->helper('url');	
 		$this->load->model('article_m');
		$this->load->model('link_m');
		$this->load->model('group_m');	
 		
 	}

	function index()
	{
		//新闻快讯
		$data['xwkx'] = $this->article_m->get_list(5, 0, 74);
		//最新通知
		$data['zxtz'] = $this->article_m->get_list(5, 0, 75);
		//专家讲坛
		$data['zjjt'] = $this->article_m->get_list(5, 0, 76);
		//学术会议
		$data['xshy'] = $this->article_m->get_list(12, 0, 77);
		//友情链接
		$data['link'] = $this->article_m->get_list_link(5, 0);
		
		$this->load->view('homeheader');
		$this->load->view('homecontent',$data);
		$this->load->view('homefoot');
	}
	public function second()
	{
		$this->load->view('homeheader');
		$this->load->view('content2_left');
		$this->load->view('homefoot');
	}
	private function _page_init($per_page)
	{
		$this->load->library('pagination');
		$type = (int) $this->input->get('type');
		if($type < 1) {
			$type = 2;
		}
	
		$config['total_rows'] = $this->article_m->get_num($type);
		$config['per_page'] = $per_page;
		$config['base_url'] = base_url('article/type/?type=' . $type);
		$config['num_links'] = 20;
		$config['query_string_segment'] = 'p';
		$config['first_link'] = '首页';
		$config['last_link'] = '末页';
		$config['prev_link'] = '上一页';
		$config['next_link'] = '下一页';
		$config['use_page_numbers'] = TRUE;
	
		$this->pagination->initialize($config);
		return $this->pagination->create_links();
	}
	
	public function search() 
	{
		$data['title'] = '搜索结果';
		$per_page = 20;
		$keywords = $this->input->get('keywords');
		$data['keywords'] = $keywords;
		$data['articles'] = $this->article_m->get_search($keywords,5,0,0);
		$data['page_html'] =  $this->_page_init($per_page);
		$this->load->view('homeheader');
		$this->load->view('search',$data);
		$this->load->view('homefoot');
	}
}
	
