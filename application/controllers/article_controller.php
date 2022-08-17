<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class article_controller extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->library('amp_library');
		$this->load->model('article_model');
	}
	
	public function index(){
		$url = explode('/',urldecode($this->uri->uri_string()));
		$sectionUrl = array_slice(array_reverse($url),4);
		$sectionUrl = implode('/',array_reverse($sectionUrl));
		$url_seg = explode(".amp", end($url));
		$split_uri = preg_split('~--(?=[^--]*$)~', $url_seg[0]);
		$content_id_from_url = (count($split_uri)>=2)? end(explode("-", $split_uri[0])):  end(explode("-", $split_uri[0]));
		$content_id = (!is_numeric($content_id_from_url))? ((count($split_uri)>1)? $split_uri[1]: "") :$content_id_from_url;
		if(is_numeric($content_id) && $content_id!=''){
			$sectionFirstName = strtolower($url[0]);
			$sectionSecondName = strtolower($url[1]);
			$year = $url[count($url) - 4];
			switch($sectionFirstName){
				case ($sectionFirstName == "galleries" || $sectionFirstName == "photos"):
					$contentType =3;
				break;
				case ($sectionFirstName == "videos" || $sectionFirstName == "e-videos"):
					$contentType =4;
				break;
				case ($sectionFirstName == "cinema" && $sectionSecondName == "photo-galleries"):
					$contentType =3;
				break;
				case ($sectionFirstName == "audios"):
					$contentType =5;
				break;
				default:
					$contentType =2;
				break;
			}
			$data['sectionDetails'] = [];
			$data['contentDetails'] = $this->article_model->articleDetails($content_id , $contentType , $year);
			if($contentType==2){
				if(count($data['contentDetails']) > 0 && $data['contentDetails']['amp_status']!=1){
					redirect('https://www.dinamani.com/'.$data['contentDetails']['url'],'location',301); 
				}
			}
			$data['menuDetails'] = $this->article_model->menuDetails();
			if($contentType==3){
				$data['galleryRelatedDetails'] = $this->article_model->galleryRelatedDetails($content_id , $year);
			}
			if(count($data['contentDetails']) > 0){
				$data['sectionDetails'] = $this->article_model->sectionDetails($data['contentDetails']['section_id']);
			}
			if(count($data['sectionDetails']) > 0  && count($data['contentDetails']) > 0){
				$data['moreStories'] = $this->article_model->moreStories($data['sectionDetails']['Section_id'] , $contentType , $content_id);	
				/* $trendingStories = $this->article_model->trendingStories();
				$data['trendingToday'] = $this->form_tags($trendingStories['trending_today']);
				$data['trendingWeek'] = $this->form_tags($trendingStories['trending_week']);
				$data['latest'] = $this->form_tags($trendingStories['latest']); */
				$data['contentType'] = $contentType;
				$data['trending'] ='';
				$trending = '/var/www/html/dinamani_app/application/views/view_template/trendingsection.php';
				if(file_exists($trending)){
					$data['trending'] = file_get_contents($trending);
					$data['trending'] = str_replace(
					[
						'<div class="trending-wrapper">' , 
						'<div class="row"><div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">' ,
						'</div></div>' ,
						'</div>' ,
						'</p>' , 
						'.html' , 
						'https://www.dinamani.com/' , 
						'target="_BLANK"' , 
						'<i class="fa fa-play"></i>' , 
						'<p class="title">'
					] , [
					'<div>',
					'<section expanded>' , 
					'</div></section>' , 
					'' , 
					'</h4>' 
					,'.amp' , 
					'https://m.dinamani.com/' , 
					'' , 
					'' , 
					'<h4>'
					] , $data['trending']);
				}
				$advUnit = @file_get_contents(FCPATH.'application/views/amp/amp_adv.json');
				$data['advUnit'] = @json_decode($advUnit , true);
				$this->load->view('amp_view' , $data);
			}else{
				show_404();
			}
			
		}else{
			show_404();
		}
		
	}
	
	public function post_file_intimation()
	{
		$file_name = $_POST['file_name'];
		$contents  = $_POST['file_contents'];
		$file_to_save = FCPATH.'application/views/amp/'.$file_name;
		$handle = fopen($file_to_save , 'w+');
		if(flock($handle, LOCK_EX))
		{
			fwrite($handle, $contents);
			flock($handle, LOCK_UN);
		}
		return true;
	}
	
	public function form_tags($tags){
		$result = '';
		foreach($tags as $tag){
			$splittedTag = explode(',',$tag['tag_name']);
			$list = '';
			$url = '';
			for($i=0;$i<count($splittedTag);$i++){
				if(mb_strlen($splittedTag[$i]) > mb_strlen($list)){
					$list = trim($splittedTag[$i]);
					$url = MOBILEURL. str_replace('.html' , '.amp' , $tag['url']);
				}
			}
			$result .='<a href="'.$url.'">'.$list.'</a>';
			
		}
		return $result;
	}
}
?> 