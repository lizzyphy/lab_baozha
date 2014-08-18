<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data extends CI_Controller 
{	
	/**
	 * 构造函数
	 */
	public function __construct() 
	{
		parent::__construct();
		
	}

	/**
	 * 首页
*/
	public function index() 
	{
		$my_lab = $this->load->database('my_lab',TRUE);
		$lab_baozha = $this->load->database('default',TRUE);
		$lab_baozha->order_by('add_date ASC');
		$query = $lab_baozha->get('article2');
		if($query->num_rows() > 0)
		{
			$array = $query->result_array() ;
			foreach($array as $a)
			{
				$data = array(
						'type'=>$a['type'],
						'ord'=>$a['ord'],
						'title'=>$a['title'],
						'content'=>$a['content'],
						'add_date'=>$a['add_date'],
						'add_time'=>$a['add_time'],
						'add_user'=>$a['add_user']
				);
			
		/*$my_lab->where('mid', 24);
		$my_lab->order_by('date DESC');
		$query = $my_lab->get('news');
		
		
		if($query->num_rows() > 0) 
		{
			$array = $query->result_array() ;
			
			foreach($array as $a)
			{
				if(empty($a['title']))
				{
					$a['title'] = '';
				}
			if(empty($a['content']))
				{
					$a['content'] = '';
				}
			if(empty($a['date']))
				{
					$a['date'] = '';
				}
			$data = array(
				              'type'=>'48',
				              'title'=>$a['title'],
							  'content'=>$a['content'],
							  'add_date'=>$a['date'],
				              'add_time'=>time(),
				              'add_user'=>'wangte'
			);	
			//var_dump($array);
			/*foreach($array as $a)
			{
				if(empty($a['n_id']))
				{
					$a['n_id'] = '';
				}
				if(empty($a['m_id']))
				{
					$a['m_id'] = '';
				}
				if(empty($a['m_lid']))
				{
					$a['m_lid'] = '';
				}
				if(empty($a['n_title']))
				{
					$a['n_title'] = '';
				}
				if(empty($a['n_image']))
				{
					$a['n_image'] = '';
				}
				if(empty($a['imgsrc']))
				{
					$a['imgsrc'] = '';
				}
				if(empty($a['n_name']))
				{
					$a['n_name'] = '';
				}
				if(empty($a['n_content']))
				{
					$a['n_content'] = '';
				}
				if(empty($a['n_click']))
				{
					$a['n_click'] = '';
				}
				if(empty($a['n_date']))
				{
					$a['n_date'] = '';
				}
				//echo iconv("UTF-8-bin","UTF-8-general-ci//IGNORE",$a['n_content']);
				//echo $a['n_content'];
				$data = array(
				              'nid'=>$a['n_id'],
				              //'mid'=>$a['m_id'],
							  //'mlid'=>$a['m_lid'],
							  'title'=>$a['n_title'],
				              'image'=>$a['n_image'],
				              //'imgsrc'=>$a['imgsrc'],
				              'name'=>$a['n_name'],
				              'content'=>$a['n_content'],
				             // 'click'=>$a['n_click'],
				              'date'=>$a['n_date']
				);*/
				$lab_baozha->insert('article',$data);
				//$my_lab->insert('zxtz',$data);
			}
		}
	}
}