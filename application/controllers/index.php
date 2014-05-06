<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Index extends  CI_Controller {
	function __construct()
 	{
 		parent::__construct();
 		$this->load->helper('url');		
 	}
	function index()
	{

		$this->load->view('homeheader');
		$this->load->view('homecontent');
		$this->load->view('homefoot');
	}
	public function second()
	{
		$this->load->view('homeheader');
		$this->load->view('content2_left');
		$this->load->view('homefoot');
	}
	public function third()
	{
		$this->load->view('homeheader');
		$this->load->view('content3');
		$this->load->view('homefoot');
	}
}
