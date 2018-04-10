<?php
class Crud_ortu extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_ortu');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['orangtua'] = $this->m_ortu->tampil_data()->result();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/v_tampil_ortu',$data);
	}
 
	function tambah(){
		$data['orangtua'] = $this->m_ortu->tampil_data()->result();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/v_tampil_ortu',$data);
	}

		function tambah_aksi(){
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
 
		$data = array(
			'nama' => $nama,
			'username' => $username,
			'password' => $password,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat' => $alamat,
			'no_hp' => $no_hp
			);
		$this->m_ortu->input_data($data,'orangtua');
		redirect('admin/crud_ortu/index');
	}
 
}
 

?>