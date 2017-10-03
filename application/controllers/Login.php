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
				if ($this->session->userdata('Status') == 'login')
					{//$this->load->view('User_Home');
						redirect('user');
					}
				else{$this->load->view('login');}	
			}
			
		public function validate(){
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				
				$user['item']= $this->user_model->check_password($username);
				if(empty($user)){
						redirect('login');
					}else{					
					 if($password == $user['item']->Password){
							$data_user = array(
									'User_Name'	=> $username,
									'Name'		=> $user['item']->Name,
									'Gender'	=> $user['item']->Gender,
									'Status'	=> 'login',
									'Level'		=> $user['item']->Level_User
								);
							$this->session->set_userdata($data_user);
							redirect('user');
						}else{
							redirect ('login');
						} 
					}	
			}
	}