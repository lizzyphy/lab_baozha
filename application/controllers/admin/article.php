<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 文章处理控制器
 * 
 * @author 风格独特
 */

class Article extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('admin_user_m');
		if($this->admin_user_m->check_login() === FALSE) {
			redirect('d=admin&c=index');
		}
		$this->load->model('article_m');
	}
	
	public function del() 
	{
		$aid = (int) $this->input->get('aid');
		if($aid < 1) {
			redirect('d=admin&c=home&m=article');
		}
		$this->article_m->del($aid);
		redirect('d=admin&c=home&m=article');
	}
	
	public function edit() 
	{
		$aid = (int) $this->input->get('aid');
		$data['title'] = $this->input->post('title', TRUE);
		$data['type'] = (int) $this->input->post('type');
		$data['content'] = $this->input->post('ue_content');
		if($data['title'] === FALSE || $data['type'] === FALSE || $data['content'] === FALSE) {
			redirect('d=admin&c=home&m=article');
		}
		$this->article_m->edit($aid, $data);
		redirect('d=admin&c=home&m=article');
	}
	
	public function add()
	{
		$title = $this->input->post('title', TRUE);
		$type = (int) $this->input->post('type');
		$content = $this->input->post('ue_content');
		$this->article_m->add($title, $type, $content, $this->admin_user_m->user->username);
		redirect('d=admin&c=home&m=article');
	}
}