<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 关于我们的控制类
 * 
 * @author 风格独特
 */

class Cert extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('admin_user_m');
		if($this->admin_user_m->check_login() === FALSE) {
			redirect('d=admin&c=index');
		}
		$this->load->model('cert_m');
		$this->load->helper('form');
	}
	
	public function index() 
	{
		$per_page = 20;
		$p = (int) $this->input->get('p');
		if($p < 1) {
			$p = 1;
		}
		$data['certs'] = $this->cert_m->get_list($per_page, $per_page * ($p - 1));
		$data['page_html'] = $this->_page_init($per_page); 
		
		$this->load->view('admin/header.php', array('username' => $this->admin_user_m->user->username));
		$this->load->view('admin/left_navi.php');
		$this->load->view('admin/cert.php', $data);
		$this->load->view('admin/footer.php');
	}
	
	public function add()
	{
		$data['name'] = trim($this->input->post('name', TRUE));
		$data['sex'] = $this->input->post('sex', TRUE);
		$data['birth'] = $this->input->post('birth', TRUE);
		$data['major'] = $this->input->post('major', TRUE);
		$data['card'] = $this->input->post('card', TRUE);
		$data['cert_id'] = trim($this->input->post('cert_id', TRUE));
		
		$this->cert_m->add($data);
		redirect('d=admin&c=cert');
	}
	
	public function edit() 
	{
		$cid = (int) $this->input->get('cid');
		
		$data['name'] = $this->input->post('name', TRUE);
		$data['sex'] = $this->input->post('sex', TRUE);
		$data['birth'] = $this->input->post('birth', TRUE);
		$data['major'] = $this->input->post('major', TRUE);
		$data['card'] = $this->input->post('card', TRUE);
		$data['cert_id'] = $this->input->post('cert_id', TRUE);
		
		$this->cert_m->edit($cid, $data);
		redirect('d=admin&c=cert');
	}
	
	public function del() 
	{
		$cid = (int) $this->input->get('cid');
		if($cid < 1) {
			redirect('d=admin&c=cert');
		}
		$this->cert_m->del($cid);
		redirect('d=admin&c=cert');
	}
	
	public function add_v() 
	{
		$data['name'] = '';
		$data['sex'] = '';
		$data['birth'] = '';
		$data['major'] = '';
		$data['card'] = '';
		$data['cert_id'] = '';
		$data['form_url'] = 'd=admin&c=cert&m=add';
		
		$this->load->view('admin/header.php', array('username' => $this->admin_user_m->user->username));
		$this->load->view('admin/left_navi.php');
		$this->load->view('admin/cert_add.php', $data);
		$this->load->view('admin/footer.php');
	}
	
	public function edit_v() 
	{
		$cid = (int) $this->input->get('cid');
		$cert = $this->cert_m->get($cid);
		if($cert === FALSE) {
			redirect('d=admin&c=cert');
		}
		$data = $cert;
		$data['form_url'] = 'd=admin&c=cert&m=edit&cid=' . $cid;
		
		$this->load->view('admin/header.php', array('username' => $this->admin_user_m->user->username));
		$this->load->view('admin/left_navi.php');
		$this->load->view('admin/cert_add.php', $data);
		$this->load->view('admin/footer.php');
	}
	
	private function _page_init($per_page)
	{
		$this->load->library('pagination');
	
		$config['total_rows'] = $this->cert_m->get_num();
	
		$config['per_page'] = $per_page;
		$config['base_url'] = 'index.php?d=admin&c=cert';
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