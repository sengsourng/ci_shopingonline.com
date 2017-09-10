<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories_main extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$data=array();
		$data['head']="inc/v_head_home";
		$data['header']="inc/v_header_home";
		$data['footer']="inc/v_footer_home";
		$data['something_sell']="inc/v_something_sell_categories";
		$data['banner_form']="inc/v_banner_form";
		$data['menu_left']="inc/v_menu_left_categories_main";
		
		$data['page']="v_categories_main";

		$this->load->view('v_template',$data);
	}
}
