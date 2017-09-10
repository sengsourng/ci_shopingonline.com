<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	 public function __construct()
        {
                parent::__construct();

                $this->load->database();
				$this->load->model('M_Categories','mcat');
				$this->load->helper('url');
        }


	public function index()
	{
	
		$data=array();
		$data['head']="inc/v_head_home";
		$data['header']="inc/v_header_home";
		$data['footer']="inc/v_footer_home";
		$data['something_sell']="inc/v_something_sell_categories";	

		$data['page']="v_details";

		$this->load->view('v_template',$data);
	}

	public function detail($pro_id=false)
	{
	
		$data=array();
		$data['head']="inc/v_head_home";
		$data['header']="inc/v_header_home";
		$data['footer']="inc/v_footer_home";
		$data['something_sell']="inc/v_something_sell_categories";
		$data['banner_form']="inc/v_banner_form";
		
		//$data['pro_id']=$pro_id;
		//Get category Search
		$sql="SELECT * FROM categories";
		$data['category']=$this->mcat->get_by_sql($sql,false);


		// Get Product Search
		$sql_pro="SELECT * FROM products where product_id=$pro_id";
		$data['products']=$this->mcat->get_by_sql($sql_pro,false);

		$sql_other_pro="SELECT * FROM products where product_id<>$pro_id";
		$data['other_products']=$this->mcat->get_by_sql($sql_other_pro,false);
		


		$data['page']="v_details";

		$this->load->view('v_template',$data);
	}
}
