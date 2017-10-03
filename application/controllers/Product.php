<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
		function __construct(){
				parent::__construct();			
				$this->load->model('product_model');
				$this->load->library('session');
				$this->load->helper('url');
				$this->_init();
			}
	
		private function _init(){
				$this->output->set_template('default');

				$this->load->js('assets/themes/default/js/jquery-1.9.1.min.js');
				$this->load->js('assets/themes/default/hero_files/bootstrap-transition.js');
				$this->load->js('assets/themes/default/hero_files/bootstrap-collapse.js');
			}
			
		public function index(){
				$data_products['product'] = $this->product_model->Show_All_Product();
				$this->load->view('products',$data_products);	
			}
			
		public function View_Product_Detail(){
			
			}
		
		public function Hide_Product($item){
				$data_item = array(
						'Deleted'		=> '4'
					);
				$condt = array(
						'ID_Product'		=> $item
					);				
				$this->product_model->Exe_Hide_Product($data_item, $condt ,'product');
				redirect(Product);	
			}
		
		public function Add_New_Product(){
				$this->load->view('Product_New');
			}
		
		public function Execute_Add(){
				$id_product = $this->input->post('id_product');
				$product	= $this->input->post('product');
				$category	= $this->input->post('category');
				$price		= $this->input->post('price');
				
				$data_item = array(
						'ID_Product'		=> $id_product,
						'Name_Product'		=> $product,
						'Category_Product'	=> $category,
						'Price'				=> $price,
						'Deleted'			=> '5'
					);
				
				$this->product_model->Exe_Add($data_item);
				redirect(Product);			
				
			}
		
		public function Edit_Product_Info($item){
				$product['data'] = $this->product_model->Get_Info($item);
				$this->load->view('Product_Profile',$product);
			}
		
		public function Execute_Edit_Product_Info(){
				$id_product = $this->input->post('id_product');
				$product	= $this->input->post('product');
				$category	= $this->input->post('category');
				$price		= $this->input->post('price');
				
				$data_item = array(
						'Name_Product'		=> $product,
						'Category_Product'	=> $category,
						'Price'				=> $price,
						'Deleted'			=> '5'
					);
				$condt = array (
						'ID_Product'		=> $id_product
					);
				$this->product_model->Execute_Update($data_item, $condt, 'product');
				redirect(Product);	
			}
			
		
	}