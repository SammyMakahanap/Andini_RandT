<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model {
	function __construct(){
		parent::__construct();		
		$this->load->database();
	}
	
	function Show_All_Product(){
			$SQL = "SELECT * from product  where product.Deleted = '5'";
			$list_data['item'] = $this->db->query($SQL)->result();
			return $list_data['item'];
		}

	function Get_Info($item){
			$SQL = "SELECT * from product  where product.ID_Product = '". $item ."'";
			$info_data['info_item'] = $this->db->query($SQL)->result();
			return $info_data['info_item'];
		}
	
	function Execute_Update($data_item, $condt, $table){
			$this->db->where($condt);
			$this->db->update($table, $data_item);
		}
	
	function Exe_Add($data_item){
			$this->db->insert('product',$data_item);
		}
	
	function Exe_Hide_Product($data_item, $condt, $table){
			$this->db->where($condt);
			$this->db->update($table, $data_item);
		}
	
}