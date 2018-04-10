<?php
class Crud_kelas extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_kelas');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['kelas'] = $this->m_kelas->tampil_data()->result();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/v_tampil_kelas',$data);
	}
 
	function tambah(){
		$data['kelas'] = $this->m_kelas->tampil_data()->result();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/v_tampil_kelas',$data);
	}

		function tambah_aksi(){
		$nama = $this->input->post('nama');
	
 
		$data = array(
			'nama' => $nama
			
			);
		$this->m_kelas->input_data($data,'kelas');
		redirect('admin/Crud_kelas/index');
	}
 
}
 

?>