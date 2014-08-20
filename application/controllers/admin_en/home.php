<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 后台管理页面控制器
 * 
 * @author 风格独特
 */

class Home extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('admin_user_m');
		if($this->admin_user_m->check_login() === FALSE) {
			redirect('d=admin_en&c=index');
		}
	}
	
	public function index()
	{
		$data['username'] = $this->admin_user_m->user->username;
		
		$this->load->view('admin_en/header.php', $data);
		$this->load->view('admin_en/left_navi.php');
		$this->load->view('admin_en/infor.php');
		$this->load->view('admin_en/footer.php');
	}
	
	public function article()
	{
		$keywords = '';
		$data['keywords'] = '';
		$per_page = 20;
		$p = (int) $this->input->get('p');
		//var_dump($p);
		if($p < 1) {
			$p = 1;
		}
		$this->load->model('article_en_m');
		
		$data['articles'] = $this->article_en_m->get_list($per_page, ($p - 1) * $per_page);
		$data['page_html'] =  $this->_page_init($per_page,$keywords);

		$this->load->view('admin_en/header.php', array('username' => $this->admin_user_m->user->username));
		$this->load->view('admin_en/left_navi.php');
		$this->load->view('admin_en/article.php', $data);
		$this->load->view('admin_en/footer.php');
	}	
	
	public function article_search()
	{
		$keywords = $this->input->post('keywords');
		$data['keywords'] = $keywords;
		$per_page = 20;
		$p = (int) $this->input->get('p');
		if($p < 1) {
			$p = 1;
		}
		$this->load->model('article_en_m');
	
		$data['articles'] = $this->article_en_m->search($keywords,$per_page, ($p - 1) * $per_page);
		$data['page_html'] =  $this->_page_init($per_page,$keywords);
	
		$this->load->view('admin_en/header.php', array('username' => $this->admin_user_m->user->username));
		$this->load->view('admin_en/left_navi.php');
		$this->load->view('admin_en/article.php', $data);
		$this->load->view('admin_en/footer.php');
	}
	
	private function _page_init($per_page,$keywords) 
	{
		$this->load->library('pagination');
		
		$type = $this->input->get('tid');
		if($type === FALSE) {
			$type = 0;
		}
		$config['total_rows'] = $this->article_en_m->get_num($type,$keywords);
		
		$config['per_page'] = $per_page;
		$config['base_url'] = 'index.php?d=admin_en&c=home&m=article';
		$config['num_links'] = 10;
		$config['query_string_segment'] = 'p';
		$config['first_link'] = '首页';
		$config['last_link'] = '末页';
		$config['prev_link'] = '上一页';
		$config['next_link'] = '下一页';
		$config['use_page_numbers'] = TRUE;

		$this->pagination->initialize($config);
		return $this->pagination->create_links();
	}
	
	public function article_add()
	{
		$this->load->model('article_en_m');
		$article_type = $this->article_en_m->article_type_en_m;
		
		$data['types'] = $article_type->get_option();
		$data['title'] = '';
		$data['content'] = '';
		$data['tid'] = 0;
		$data['form_url'] = 'd=admin_en&c=article&m=add';
		//var_dump($data['types']);
		$this->load->view('admin_en/header.php', array('username' => $this->admin_user_m->user->username));
		$this->load->view('admin_en/left_navi.php');
		$this->load->view('admin_en/article_add.php', $data);
		$this->load->view('admin_en/footer.php');
	}
	
	public function article_edit() 
	{
		$this->load->model('article_en_m');
		$aid = (int) $this->input->get('aid');
		$article = $this->article_en_m->get($aid);
		if($article === FALSE) {
			redirect('d=admin_en&c=home');
		}
		
		$this->load->model('article_en_m');
		$article_type = $this->article_en_m->article_type_m;
		$data['types'] = $article_type->get_option();
		$data['title'] = $article['title'];
		$data['content'] = $article['content'];
		$data['tid'] = $article['type'];
		$data['form_url'] = 'd=admin_en&c=article&m=edit&aid=' . $aid;
		
		$this->load->view('admin_en/header.php', array('username' => $this->admin_user_m->user->username));
		$this->load->view('admin_en/left_navi.php');
		$this->load->view('admin_en/article_add.php', $data);
		$this->load->view('admin_en/footer.php');
	}
}