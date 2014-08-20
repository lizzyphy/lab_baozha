<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 首页图片管理的控制类
 * 
 * @author 风格独特
 */

class Group extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('admin_user_m');
		if($this->admin_user_m->check_login() === FALSE) {
			redirect('d=admin_en&c=index');
		}
		$this->load->model('group_en_m');
		$this->load->helper('form');
	}
	
	public function index() 
	{
		$per_page = 20;
		$p = (int) $this->input->get('p');
		if($p < 1) {
			$p = 1;
		}
		$data['groups'] = $this->group_en_m->get_list_admin($per_page, ($p - 1) * $per_page);
		$data['page_html'] =  $this->_page_init($per_page);
		$this->load->view('admin_en/header.php', array('username' => $this->admin_user_m->user->username));
		$this->load->view('admin_en/left_navi.php');
		$this->load->view('admin_en/group.php', $data);
		$this->load->view('admin_en/footer.php');
	}
	
	public function add() 
	{
		$make_url = $this->config->item('admin_upload');
		
		$this->load->library('uploader_ue');
		$config = array(
				"savePath" => "upload/" ,
				"maxSize" => 100000 , //单位KB
				"allowFiles" => array( ".gif" , ".png" , ".jpg" , ".jpeg" , ".bmp"  )
		);
		$up = new Uploader_ue( "upfile" , $config );
		$info = $up->getFileInfo();
		
		$avatar = $make_url . $info['url'];
		$order = $this->input->post('order');
		$title = $this->input->post('title', TRUE);
		$content = $this->input->post('ue_content');
		$this->group_en_m->add($order, $title, $avatar, $content);
		redirect('d=admin_en&c=group');
	}
	
	public function edit()
	{
		$make_url = $this->config->item('admin_upload');
		
		$this->load->library('uploader_ue');
		$config = array(
				"savePath" => "upload/" ,
				"maxSize" => 100000 , //单位KB
				"allowFiles" => array( ".gif" , ".png" , ".jpg" , ".jpeg" , ".bmp"  )
		);
		$up = new Uploader_ue( "upfile" , $config);
		$info = $up->getFileInfo();
		if($info['state'] == 'SUCCESS') {
			$data['avatar'] = $make_url . $info['url'];
		}
		
		$gid = (int) $this->input->get('gid');
		$data['title'] = $this->input->post('title', TRUE);
		$data['order'] = $this->input->post('order');
		$data['content'] = $this->input->post('ue_content');

		$this->group_en_m->edit($gid, $data);
		redirect('d=admin_en&c=group');
	}
	
	public function del()
	{
		$type = (int) $this->input->get('type');
		$gid = (int) $this->input->get('gid');
		if($gid < 1) {
			redirect('d=admin_en&c=group');
		}
		$this->group_en_m->del($gid);
		redirect('d=admin_en&c=group&type=' . $type);
	}
	
	public function add_v()
	{
		$data['order'] = '';
		$data['title'] = '';
		$data['content'] = '';
		$data['form_url'] = 'd=admin_en&c=group&m=add';
		$this->load->view('admin_en/header.php', array('username' => $this->admin_user_m->user->username));
		$this->load->view('admin_en/left_navi.php');
		$this->load->view('admin_en/group_add.php', $data);
		$this->load->view('admin_en/footer.php');
	}
	
	public function edit_v()
	{
		$gid = (int) $this->input->get('gid');
		$group = $this->group_en_m->get($gid);
		if($group === FALSE) {
			redirect('d=admin_en&c=group');
		}
		$data['title'] = $group['title'];
		$data['content'] = $group['content'];
		$data['order'] = $group['order'];
		$data['form_url'] = 'd=admin_en&c=group&m=edit&gid=' . $gid;
		
		$this->load->view('admin_en/header.php', array('username' => $this->admin_user_m->user->username));
		$this->load->view('admin_en/left_navi.php');
		$this->load->view('admin_en/group_add.php', $data);
		$this->load->view('admin_en/footer.php');
	}
	
	private function _page_init($per_page)
	{
		$this->load->library('pagination');
	
		$type = $this->input->get('type');
		if($type == FALSE) {
			//$type = group_m::GROUP_TEACHER;
			$type = 29;
		}
		$config['total_rows'] = $this->group_en_m->get_num($type);
	
		$config['per_page'] = $per_page;
		$config['base_url'] = 'index.php?d=admin_en&c=group';
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
}