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
		$lab = $this->load->database('default',TRUE);
		$query = $lab->get('lab_news');
		
		
		if($query->num_rows() > 0) 
		{
			$array = $query->result_array() ;
			//var_dump($array);
			foreach($array as $a)
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
				              'mid'=>$a['m_id'],
							  'mlid'=>$a['m_lid'],
							  'title'=>$a['n_title'],
				              'image'=>$a['n_image'],
				              'imgsrc'=>$a['imgsrc'],
				              'name'=>$a['n_name'],
				              'content'=>$a['n_content'],
				              'click'=>$a['n_click'],
				              'date'=>$a['n_date']
				);
				$my_lab->insert('news',$data);
			}
		}
	}
}