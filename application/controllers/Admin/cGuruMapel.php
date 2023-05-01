<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cGuruMapel extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mGuruMapel');
	}

	public function index()
	{
		$data = array(
			'guru' => $this->mGuruMapel->select()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/navbar');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/vGuruMapel', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function create()
	{
		$data = array(
			'nip_guru' => $this->input->post('nip'),
			'nama_guru' => $this->input->post('nama'),
			'no_hp_guru' => $this->input->post('no_hp'),
			'mapel' => $this->input->post('mapel'),
			'username_guru' => $this->input->post('username'),
			'password_guru' => $this->input->post('password'),
		);
		$this->mGuruMapel->insert($data);
		$this->session->set_flashdata('success', 'Data Guru Mata Pelajaran Berhasil Ditambahkan!!!');
		redirect('Admin/cGuruMapel');
	}
	public function update($id)
	{
		$data = array(
			'nip_guru' => $this->input->post('nip'),
			'nama_guru' => $this->input->post('nama'),
			'no_hp_guru' => $this->input->post('no_hp'),
			'mapel' => $this->input->post('mapel'),
			'username_guru' => $this->input->post('username'),
			'password_guru' => $this->input->post('password'),
		);
		$this->mGuruMapel->update($id, $data);
		$this->session->set_flashdata('success', 'Data Guru Mata Pelajaran Berhasil Diperbaharui!!!');
		redirect('Admin/cGuruMapel');
	}
	public function delete($id)
	{
		$this->mGuruMapel->delete($id);
		$this->session->set_flashdata('success', 'Data Guru Mata Pelajaran Berhasil Dihapus!!!');
		redirect('Admin/cGuruMapel');
	}
}

/* End of file cGuruMapel.php */
