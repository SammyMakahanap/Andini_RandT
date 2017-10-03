<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
	function __construct(){
		parent::__construct();		
		$this->load->database();
	}
	
	function check_password($username){
			$this->db->where('username',$username);
			return $this->db->get('user')->row();
		}

}