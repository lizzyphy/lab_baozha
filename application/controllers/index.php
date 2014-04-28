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
		$this->load->view('content2_left');
		$this->load->view('homefoot');
	}
}
