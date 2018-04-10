<?php
class Crud_mapel extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_mapel');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['mata_pelajaran'] = $this->m_mapel->tampil_data()->result();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/v_tampil_mapel',$data);
	}
 
	function tambah(){
		$data['mata_pelajaran'] = $this->m_mapel->tampil_data()->result();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/v_tampil_mapel',$data);
	}

		function tambah_aksi(){
		$nama_mapel = $this->input->post('nama_mapel');
		
		$data = array(
			'nama_mapel' => $nama_mapel
			);
		$this->m_mapel->input_data($data,'mata_pelajaran');
		redirect('admin/crud_mapel/index');
	}
 
}
 

?>