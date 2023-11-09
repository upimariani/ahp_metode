<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cNilaiSiswa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mAnalisisAhp');
		$this->load->model('mNilaiSiswa');
	}

	public function index()
	{
		$data = array(
			'periode' => $this->mAnalisisAhp->periode()
		);
		$this->load->view('GuruMapel/Layouts/head');
		$this->load->view('GuruMapel/Layouts/navbar');
		$this->load->view('GuruMapel/Layouts/aside');
		$this->load->view('GuruMapel/vNilaiSiswa', $data);
		$this->load->view('GuruMapel/Layouts/footer');
	}
	public function view_siswa($kelas, $angkatan)
	{
		$data = array(
			'kelas' => $kelas,
			'angkatan' => $angkatan,
			'siswa' => $this->mNilaiSiswa->siswa($kelas, $angkatan),
			'view_nilai' => $this->mNilaiSiswa->view_nilai($kelas, $angkatan)
		);
		$this->load->view('GuruMapel/Layouts/head');
		$this->load->view('GuruMapel/Layouts/navbar');
		$this->load->view('GuruMapel/Layouts/aside');
		$this->load->view('GuruMapel/vViewSiswa', $data);
		$this->load->view('GuruMapel/Layouts/footer');
	}
	public function nilai($kelas, $angkatan)
	{
		$id_guru = $this->session->userdata('id');
		$id_siswa = $this->input->post('siswa_nilai');
		//cek data
		$cek_data = $this->db->query("SELECT * FROM `nilai_raport` WHERE id_siswa='" . $id_siswa . "' AND id_guru='" . $id_guru . "'")->row();
		if ($cek_data) {
			$this->session->set_flashdata('success', 'Data Nilai Sudah Tersedia!!!');
			redirect('GuruMapel/cNilaiSiswa/view_siswa/' . $kelas . '/' . $angkatan);
		} else {
			$data = array(
				'id_siswa' => $this->input->post('siswa_nilai'),
				'id_guru' => $this->session->userdata('id'),
				'nilai' => $this->input->post('nilai'),
			);
			$this->mNilaiSiswa->insert_nilai($data);
			$this->session->set_flashdata('success', 'Data Nilai Berhasil Ditambahkan!!!');
			redirect('GuruMapel/cNilaiSiswa/view_siswa/' . $kelas . '/' . $angkatan);
		}
	}
}

/* End of file cNilaiSiswa.php */
