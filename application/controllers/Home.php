<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$data=array();
		$data['head']="inc/v_head_home";
		$data['header']="inc/v_header_home";
		$data['footer']="inc/v_footer_home";
		
		$data['download']="inc/v_download_home";
		//$data['download']=NULL;

		//Banner Search
		$data['banner_search']="inc/v_banner_search";
		//$data['banner_search']=NULL;

		//Product List
		$data['product_list']="home/v_product_list";
		//$data['product_list']=NULL;
		
// top_categories
		$data['top_categories']="home/v_top_categories";
		//$data['top_categories']=NULL;
// feature_ads	
		$data['feature_ads']="home/v_feature_ads";
		//$data['feature_ads']=NULL;
// trending_ads
		$data['trending_ads']="home/v_trending_ads";
		//$data['trending_ads']=NULL;


		$data['page']="v_home";

		$this->load->view('v_template',$data);
	}
}
