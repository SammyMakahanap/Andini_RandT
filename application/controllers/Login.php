<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
		function __construct(){
				parent::__construct();			
				$this->load->model('user_model');
				$this->load->library('session');
				$this->load->helper('url');
			}

		public function index(){
			$this->load->view('login');	
			}
			
		public function validate(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			$user['item']= $this->user_model->check_password($username);
			if(empty($user)){
					redirect('login');
				}else{					
				 if($password == $user['item']->password){
						redirect('user');
					}else{
						redirect ('login');
					} 
				}
			}
	}