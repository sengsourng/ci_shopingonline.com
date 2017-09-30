<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {
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
		$data['banner_form']="inc/v_banner_form";
		//$data['menu_left_categories']="inc/v_menu_left_categories";
		$data['menu_left_categories']="inc/v_menu_left_categories_main";

		//Get category Search
		$sql="SELECT * FROM categories";
		$data['category']=$this->mcat->get_by_sql($sql,false);


		// Get Product Search
		$sql_pro="SELECT * FROM products";
		$data['products']=$this->mcat->get_by_sql($sql_pro,false);
		


		$data['page']="v_categories";

		$this->load->view('v_template',$data);
	}


	public function listsearch(){
		$data=array();
		$data['head']="inc/v_head_home";
		$data['header']="inc/v_header_home";
		$data['footer']="inc/v_footer_home";
		$data['something_sell']="inc/v_something_sell_categories";
		$data['banner_form']="inc/v_banner_form";
			//$data['menu_left_categories']="inc/v_menu_left_categories";
		$data['menu_left_categories']="inc/v_menu_left_categories_main";

		$cat_id=$_POST['txtcategory'];


		//Get category Search
		$sql="SELECT * FROM categories";
		$data['category']=$this->mcat->get_by_sql($sql,false);

		// Get Product Search
		$sql_pro="SELECT * FROM products where cat_id=$cat_id";
		$data['products']=$this->mcat->get_by_sql($sql_pro,false);

	
		$data['page']="v_categories";
		$this->load->view('v_template',$data);

	}




	public function findCategory($cat_id){
		$data=array();
		$data['head']="inc/v_head_home";
		$data['header']="inc/v_header_home";
		$data['footer']="inc/v_footer_home";
		$data['something_sell']="inc/v_something_sell_categories";
		$data['banner_form']="inc/v_banner_form";
			//$data['menu_left_categories']="inc/v_menu_left_categories";
		$data['menu_left_categories']="inc/v_menu_left_categories_main";

		//$cat_id=$_POST['txtcategory'];


		//Get category Search
		$sql="SELECT * FROM categories";
		$data['category']=$this->mcat->get_by_sql($sql,false);

		// Get Product Search
		$sql_pro="SELECT * FROM products where cat_id=$cat_id";
		$data['products']=$this->mcat->get_by_sql($sql_pro,false);

	
		$data['page']="v_categories";
		$this->load->view('v_template',$data);

	}

}
