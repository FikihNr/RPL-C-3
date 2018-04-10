<?php 
 
class M_pengajar extends CI_Model{
	function tampil_data(){
		return $this->db->get('pengajar');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}