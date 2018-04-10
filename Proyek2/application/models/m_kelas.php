<?php 
 
class M_kelas extends CI_Model{
	function tampil_data(){
		return $this->db->get('kelas');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}