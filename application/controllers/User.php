<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
		function __construct(){
				parent::__construct();			
				$this->load->model('user_model');
				$this->load->library('session');
				$this->load->helper('url');
			}
			
		public function index(){
			$this->load->view('User_Home');	
			}
	}