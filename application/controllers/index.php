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

	public function index()
	{
		//新闻快讯
		$data['xwkx'] = $this->article_m->get_list(5, 0, 74);
		//最新通知
		$data['zxtz'] = $this->article_m->get_list(5, 0, 75);
		//专家讲坛
		$data['zjjt'] = $this->article_m->get_list(5, 0, 80);
		//学术会议
		$data['xshy'] = $this->article_m->get_list(12, 0, 79);
		//友情链接
		$data['link'] = $this->article_m->get_list_link(5, 0);
		$data['picture_url'] = $this->article_m->get_list_img(4, 0);
		$data['flash_url'] = $this->article_m->get_list_flash(1, 0);
		$data1['rules_regulations'] = $this->article_m->get_list(20, 0, 60);
		$this->load->view('homeheader',$data1);
		$this->load->view('homecontent',$data);
		$this->load->view('homefoot');
	}
	/*public function second()
	{
		$this->load->view('homeheader');
		$this->load->view('content2_left');
		$this->load->view('homefoot');
	}*/
	private function _page_init_search($per_page, $total_rows)
	{
		$this->load->library('pagination');
		
		$keyword = $this->input->get('keywords', TRUE);
		
		$config['total_rows'] = $total_rows;
		$config['per_page'] = $per_page;
		$config['base_url'] = base_url('index/search/?keywords=' . $keyword);
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
		$per_page = 20;
		$p = (int) $this->input->get('p');
		$keyword = $this->input->get('keywords', TRUE);
		if($p < 1) {
			$p = 1;
		}
		$data['keywords'] = $keyword;
		$data['articles'] = $this->article_m->get_search($keyword, $per_page, $per_page * ($p - 1));
		$total_rows = $this->article_m->get_num(0, $keyword);
		$data['page_html'] =  $this->_page_init_search($per_page, $total_rows);
		
		
		$this->load->view('homeheader');
		$this->load->view('search.php', $data);
		$this->load->view('homefoot');
	}
	
	public function english()
	{
		$data['picture_url'] = $this->article_m->get_list_img(4, 0);
		$data['flash_url'] = $this->article_m->get_list_flash(1, 0);
		$this->load->view('en_home_top');
		$this->load->view('en_home_left',$data);
		$this->load->view('en_home_right',$data);
		$this->load->view('en_footer');
	}
}
	
