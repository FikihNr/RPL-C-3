<?php 
 
class M_mapel extends CI_Model{
	function tampil_data(){
		return $this->db->get('mata_pelajaran');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}