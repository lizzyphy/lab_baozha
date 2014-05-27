<?php
/**
 * UEditor1.4.2的上传控制器
 * 
 * @author 风格独特
 * @version 2014-05-27
 */

class Upload extends CI_Controller 
{
	private $ue_config = array();
	
	public function __construct() 
	{
		parent::__construct();
		
		$this->load->model('admin_user_m');
		if($this->admin_user_m->check_login(FALSE) === FALSE) {
			exit;
		}
		
		header("Content-Type: text/html; charset=utf-8");
		
		// 加载UE上传库
		$this->load->library('Uploader_ue');
		
		// 加载上传配置文件
		$this->ue_config = json_decode(preg_replace("/\/\*[\s\S]+?\*\//", "", file_get_contents(__DIR__ . "/ue_config.json")), true);
	}
	
	public function index() 
	{
		$action = $_GET['action'];
		
		switch ($action) {
			case 'config':
				$result =  json_encode($this->ue_config);
				break;
		
				/* 上传图片 */
			case 'uploadimage':
				/* 上传涂鸦 */
			case 'uploadscrawl':
				/* 上传视频 */
			case 'uploadvideo':
				/* 上传文件 */
			case 'uploadfile':
				$result = $this->_upload();
				break;
		
				/* 列出图片 */
			case 'listimage':
				/* 列出文件 */
			case 'listfile':
				$result = $this->_list();
				break;
		
				/* 抓取远程文件 */
			case 'catchimage':
				$result = $this->_crawler();
				break;
		
			default:
				$result = json_encode(array(
					'state'=> '请求地址出错'
				));
				break;
		}
		
		/* 输出结果 */
		if (isset($_GET["callback"])) {
			echo $_GET["callback"] . '(' . $result . ')';
		} else {
			echo $result;
		}
	}
	
	private function _upload()
	{
		$base64 = "upload";
		switch ($_GET['action']) {
			case 'uploadimage':
				$config = array(
					"pathFormat" => $this->ue_config['imagePathFormat'],
					"maxSize" => $this->ue_config['imageMaxSize'],
					"allowFiles" => $this->ue_config['imageAllowFiles']
				);
				$fieldName = $this->ue_config['imageFieldName'];
				break;
			case 'uploadscrawl':
				$config = array(
					"pathFormat" => $this->ue_config['scrawlPathFormat'],
					"maxSize" => $this->ue_config['scrawlMaxSize'],
					"allowFiles" => $this->ue_config['scrawlAllowFiles'],
					"oriName" => "scrawl.png"
				);
				$fieldName = $this->ue_config['scrawlFieldName'];
				$base64 = "base64";
				break;
			case 'uploadvideo':
				$config = array(
					"pathFormat" => $this->ue_config['videoPathFormat'],
					"maxSize" => $this->ue_config['videoMaxSize'],
					"allowFiles" => $this->ue_config['videoAllowFiles']
				);
				$fieldName = $this->ue_config['videoFieldName'];
				break;
			case 'uploadfile':
			default:
				$config = array(
					"pathFormat" => $this->ue_config['filePathFormat'],
					"maxSize" => $this->ue_config['fileMaxSize'],
					"allowFiles" => $this->ue_config['fileAllowFiles']
				);
				$fieldName = $this->ue_config['fileFieldName'];
				break;
		}
		
		/* 生成上传实例对象并完成上传 */
		$up = new Uploader_ue($fieldName, $config, $base64);
		
		/**
		 * 得到上传文件所对应的各个参数,数组结构
		 * array(
		 *     "state" => "",          //上传状态，上传成功时必须返回"SUCCESS"
		 *     "url" => "",            //返回的地址
		 *     "title" => "",          //新文件名
		 *     "original" => "",       //原始文件名
		 *     "type" => ""            //文件类型
		 *     "size" => "",           //文件大小
		 * )
		*/
		
		/* 返回数据 */
		return json_encode($up->getFileInfo());
	}
	
	private function _list()
	{
		switch ($_GET['action']) {
			/* 列出文件 */
			case 'listfile':
				$allowFiles = $this->ue_config['fileManagerAllowFiles'];
				$listSize = $this->ue_config['fileManagerListSize'];
				$path = $this->ue_config['fileManagerListPath'];
				break;
				/* 列出图片 */
			case 'listimage':
			default:
				$allowFiles = $this->ue_config['imageManagerAllowFiles'];
				$listSize = $this->ue_config['imageManagerListSize'];
				$path = $this->ue_config['imageManagerListPath'];
		}
		$allowFiles = substr(str_replace(".", "|", join("", $allowFiles)), 1);
		
		/* 获取参数 */
		$size = isset($_GET['size']) ? $_GET['size'] : $listSize;
		$start = isset($_GET['start']) ? $_GET['start'] : 0;
		$end = $start + $size;
		
		/* 获取文件列表 */
		$path = $_SERVER['DOCUMENT_ROOT'] . (substr($path, 0, 1) == "/" ? "":"/") . $path;
		$files = $this->_getfiles($path, $allowFiles);
		if (!count($files)) {
			return json_encode(array(
				"state" => "no match file",
				"list" => array(),
				"start" => $start,
				"total" => count($files)
			));
		}
		
		/* 获取指定范围的列表 */
		$len = count($files);
		for ($i = min($end, $len) - 1, $list = array(); $i < $len && $i >= 0 && $i >= $start; $i--){
			$list[] = $files[$i];
		}
		//倒序
		//for ($i = $end, $list = array(); $i < $len && $i < $end; $i++){
		//    $list[] = $files[$i];
		//}
		
		/* 返回数据 */
		$result = json_encode(array(
				"state" => "SUCCESS",
				"list" => $list,
				"start" => $start,
				"total" => count($files)
		));
		
		return $result;
	}
	
	private function _crawler() 
	{
		/* 上传配置 */
		$config = array(
				"pathFormat" => $this->ue_config['catcherPathFormat'],
				"maxSize" => $this->ue_config['catcherMaxSize'],
				"allowFiles" => $this->ue_config['catcherAllowFiles'],
				"oriName" => "remote.png"
		);
		$fieldName = $this->ue_config['catcherFieldName'];
		
		/* 抓取远程图片 */
		$list = array();
		if (isset($_POST[$fieldName])) {
			$source = $_POST[$fieldName];
		} else {
			$source = $_GET[$fieldName];
		}
		foreach ($source as $imgUrl) {
			$item = new Uploader_ue($imgUrl, $config, "remote");
			$info = $item->getFileInfo();
			array_push($list, array(
				"state" => $info["state"],
				"url" => $info["url"],
				"source" => $imgUrl
			));
		}
		
		/* 返回抓取数据 */
		return json_encode(array(
			'state'=> count($list) ? 'SUCCESS':'ERROR',
			'list'=> $list
		));
	}
	
	private function _getfiles($path, $allowFiles, &$files = array())
	{
		if (!is_dir($path)) return null;
		if(substr($path, strlen($path) - 1) != '/') $path .= '/';
		$handle = opendir($path);
		while (false !== ($file = readdir($handle))) {
			if ($file != '.' && $file != '..') {
				$path2 = $path . $file;
				if (is_dir($path2)) {
					$this->_getfiles($path2, $allowFiles, $files);
				} else {
					if (preg_match("/\.(".$allowFiles.")$/i", $file)) {
						$files[] = array(
								'url'=> substr($path2, strlen($_SERVER['DOCUMENT_ROOT'])),
								'mtime'=> filemtime($path2)
						);
					}
				}
			}
		}
		return $files;
	}
}