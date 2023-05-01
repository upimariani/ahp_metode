<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cSiswa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('msiswa');
	}


	public function index()
	{
		$this->protect->protect();
		$data = array(
			'siswa' => $this->msiswa->select()
		);
		$this->load->view('WaliKelas/Layouts/head');
		$this->load->view('WaliKelas/Layouts/navbar');
		$this->load->view('WaliKelas/Layouts/aside');
		$this->load->view('WaliKelas/siswa/siswa', $data);
		$this->load->view('WaliKelas/Layouts/footer');
	}
	public function create()
	{
		$this->form_validation->set_rules('nama', 'Nama Siswa', 'required');
		$this->form_validation->set_rules('nis', 'NIS Siswa', 'required');
		$this->form_validation->set_rules('kelas', 'Kelas siswa', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('ttl', 'Tempat, Tanggal Lahir Siswa', 'required');
		$this->form_validation->set_rules('angkatan', 'Tahun Angkatan Siswa', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('WaliKelas/Layouts/head');
			$this->load->view('WaliKelas/Layouts/navbar');
			$this->load->view('WaliKelas/Layouts/aside');
			$this->load->view('WaliKelas/siswa/create');
			$this->load->view('WaliKelas/Layouts/footer');
		} else {
			$data = array(
				'id_user' => $this->session->userdata('id'),
				'nama_siswa' => $this->input->post('nama'),
				'kelas' => $this->input->post('kelas'),
				'angkatan' => $this->input->post('angkatan'),
				'alamat' => $this->input->post('alamat'),
				'jk' => $this->input->post('jk'),
				'nis' => $this->input->post('nis'),
				'ttl' => $this->input->post('ttl'),
			);
			$this->msiswa->insert($data);
			$this->session->set_flashdata('success', 'Data siswa Berhasil Ditambahkan!');
			redirect('WaliKelas/cSiswa');
		}
	}
	public function edit($id)
	{

		$this->form_validation->set_rules('nama', 'Nama Siswa', 'required');
		$this->form_validation->set_rules('nis', 'NIS Siswa', 'required');
		$this->form_validation->set_rules('kelas', 'Kelas siswa', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('ttl', 'Tempat, Tanggal Lahir Siswa', 'required');
		$this->form_validation->set_rules('angkatan', 'Tahun Angkatan Siswa', 'required');



		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'siswa' => $this->msiswa->edit($id)
			);
			$this->load->view('WaliKelas/Layouts/head');
			$this->load->view('WaliKelas/Layouts/navbar');
			$this->load->view('WaliKelas/Layouts/aside');
			$this->load->view('WaliKelas/siswa/update', $data);
			$this->load->view('WaliKelas/Layouts/footer');
		} else {
			$data = array(
				'nama_siswa' => $this->input->post('nama'),
				'kelas' => $this->input->post('kelas'),
				'angkatan' => $this->input->post('angkatan'),
				'alamat' => $this->input->post('alamat'),
				'jk' => $this->input->post('jk'),
				'nis' => $this->input->post('nis'),
				'ttl' => $this->input->post('ttl'),

			);
			$this->msiswa->update($id, $data);
			$this->session->set_flashdata('success', 'Data siswa Berhasil Diperbaharui!');
			redirect('WaliKelas/cSiswa');
		}
	}
	public function delete($id)
	{
		$this->msiswa->delete($id);
		$this->session->set_flashdata('success', 'Data siswa Berhasil Dihapus!');
		redirect('WaliKelas/cSiswa');
	}
}

/* End of file cSiswa.php */
