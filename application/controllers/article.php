<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Controller 
{	
	/**
	 * 构造函数
	 */
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('article_m');
		$this->load->model('about_m');
	}

	/**
	 * 首页
*/
	public function index() 
	{
		$aid = (int) $this->input->get('aid');
		$data['article'] = $this->article_m->get($aid);
		$type = $data['article']['type'];
		$data['type'] = $data['article']['type'];
		$data['name'] = $this->about_m->get_second_name($type);
		$this->load->view('homeheader');
		$this->load->view('img_new');
		if($data['article']['type'] == 79 || $data['article']['type'] == 80 || $data['article']['type'] == 81) {
			$this->load->view('left_academic.php');
		} 
		elseif($data['article']['type'] == 46 || $data['article']['type'] == 47 || $data['article']['type'] == 58) {
			$this->load->view('left_navi_hzjl.php');
		} 
		elseif($data['article']['type'] == 39 || $data['article']['type'] == 40 || $data['article']['type'] == 41 || $data['article']['type'] == 42) {
			$this->load->view('left_navi_kycg.php');
		}
		elseif($data['article']['type'] == 48 || $data['article']['type'] == 49 || $data['article']['type'] == 50 || $data['article']['type'] == 51 || $data['article']['type'] == 72) {
			$this->load->view('left_navi_xgxz.php');
		}
		elseif($data['article']['type'] == 92 || $data['article']['type'] == 93 || $data['article']['type'] == 94 || $data['article']['type'] == 95 || $data['article']['type'] == 96)
		{
			$this->load->view('left_fund.php');
		}
		elseif($data['article']['type'] == 98 || $data['article']['type'] == 99 || $data['article']['type'] == 100 || $data['article']['type'] == 101)
		{
			$this->load->view('left_share.php');
		}
		else {
			$this->load->view('left_news.php');
		}	
		$this->load->view('content3', $data);
		$this->load->view('homefoot');
	}
	
	public function type() 
	{
		$per_page = 20;
		$type = (int) $this->input->get('type');
		$p = (int) $this->input->get('p');
		if($p < 1) {
			$p = 1;
		}
		if($type < 1) {
			$type = 2;
		}
		
		$data['type'] = $type;
		
		if(in_array($type, array(59, 64)))
		{
			$data['article'] = $this->about_m->get_list2($type);
			$data['name'] = $this->about_m->get_second_name($type);
			$this->load->view('homeheader.php');
			$this->load->view('img_new.php');
			$this->load->view('left_navi_yxgl.php');
			$this->load->view('about2.php', $data);
			$this->load->view('homefoot.php');
			
		}
		elseif(in_array($type, array(60,61,62,63,64,65,66,67,68,69,70,71)))
		{
			$data['article'] = $this->about_m->get($type);
			$data['name'] = $this->about_m->get_second_name($type);
			$abouts = $this->about_m->get_list();	
			if($type == FALSE) {
				$data['article'] = $abouts[0];	
			}
			
			$this->load->view('homeheader.php');
			$this->load->view('img_new.php');
			$this->load->view('left_navi_yxgl.php');			
			$this->load->view('about.php', $data);
			$this->load->view('homefoot.php');
		}
		elseif(in_array($type, array(2,3,8,9)))
		{
			$data['article'] = $this->about_m->get($type);
			$data['name'] = $this->about_m->get_second_name($type);
			$this->load->view('homeheader.php');
			$this->load->view('img_new.php');
			$this->load->view('left_navi_new.php');
			$this->load->view('about.php', $data);
			$this->load->view('homefoot.php');
		}
		else
		{
			$data['articles'] = $this->article_m->get_list($per_page, $per_page * ($p - 1), $type);
			$data['page_html'] =  $this->_page_init($per_page);
			$data['name'] = $this->about_m->get_second_name($type);
			
			$this->load->view('homeheader');
			$this->load->view('img_new');
			if($type==17 || $type == 18)
			{
				$this->load->view('left_navi_new.php');
			}
			elseif($type == 78 || $type == 79 || $type == 80 || $type == 81) {
				$this->load->view('left_academic.php');
			} 
			elseif($type == 46 || $type == 47 || $type == 58) {
				$this->load->view('left_navi_hzjl.php');
			}
			elseif($type == 92 || $type == 93 || $type == 94 || $type == 95 || $type == 96)
			{
				$this->load->view('left_fund.php');
			}
			elseif($type == 39 || $type == 40 || $type == 41 || $type == 42)
			{
				$this->load->view('left_navi_kycg.php');
			}
			elseif($type == 48 || $type == 49 || $type == 50 || $type == 51 || $type == 72)
			{
				$this->load->view('left_navi_xgxz.php');
			}
			elseif($type == 98 || $type == 99 || $type == 100 || $type == 101)
			{
				$this->load->view('left_share.php');
			}
			else {
				$this->load->view('left_news.php');
			}
			$this->load->view('content2_left.php', $data);
			$this->load->view('homefoot');
		}
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
}
