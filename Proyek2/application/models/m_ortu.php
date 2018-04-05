<?php 
 
class M_ortu extends CI_Model{
	function tampil_data(){
		return $this->db->get('orangtua');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}