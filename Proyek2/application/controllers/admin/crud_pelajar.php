<?php
class Crud_pelajar extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['siswa'] = $this->m_data->tampil_data()->result();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/v_tampil_pelajar',$data);
	}
 
	function tambah(){
		$data['siswa'] = $this->m_data->tampil_data()->result();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/v_tampil_pelajar',$data);
	}

		function tambah_aksi(){
		$nama = $this->input->post('nama');
		$NIS = $this->input->post('NIS');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$alamat = $this->input->post('alamat');
 
		$data = array(
			'nama' => $nama,
			'NIS' => $NIS,
			'username' => $username,
			'password' => $password,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat' => $alamat
			);
		$this->m_data->input_data($data,'siswa');
		redirect('admin/crud_pelajar/index');
	}

	function edit($id_siswa=''){
		$data['username'] = $this->session->userdata('username');
	$where = array('id_siswa' => $id_siswa);
	$data['siswa'] = $this->m_data->edit_data($where,'siswa')->result();
	$this->load->view('admin/v_edit_siswa',$data);
}

function update(){
		$nama = $this->input->post('nama');
		$NIS = $this->input->post('NIS');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$alamat = $this->input->post('alamat');
 
		$data = array(
			'nama' => $nama,
			'NIS' => $NIS,
			'username' => $username,
			'password' => $password,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat' => $alamat
			);
			$where = array(
		'id_siswa' => $id_siswa
	);
		$this->m_data->update_data($data,'siswa');
		redirect('admin/crud_pelajar/index');
	}

 
}
 

?>