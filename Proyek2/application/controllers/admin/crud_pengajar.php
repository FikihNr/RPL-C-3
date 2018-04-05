<?php
class Crud_pengajar extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_pengajar');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['pengajar'] = $this->m_pengajar->tampil_data()->result();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/v_tampil_pengajar',$data);
	}
 
	function tambah(){
		$data['pengajar'] = $this->m_pengajar->tampil_data()->result();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/v_tampil_pengajar',$data);
	}

		function tambah_aksi(){
		$nama = $this->input->post('nama');
		$NIP = $this->input->post('NIP');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
 
		$data = array(
			'nama' => $nama,
			'NIP' => $NIP,
			'username' => $username,
			'password' => $password,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat' => $alamat,
			'no_hp' => $no_hp
			);
		$this->m_pengajar->input_data($data,'pengajar');
		redirect('admin/crud_pengajar/index');
	}
 
}
 

?>