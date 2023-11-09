<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cSiswa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('msiswa');
		// $this->load->library(array('excel', 'session'));
	}


	public function index()
	{
		$this->protect->protect();
		$data = array(
			'siswa' => $this->msiswa->select()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/navbar');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/Siswa/siswa', $data);
		$this->load->view('Admin/Layouts/footer');
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
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/navbar');
			$this->load->view('Admin/Layouts/aside');
			$this->load->view('Admin/siswa/create');
			$this->load->view('Admin/Layouts/footer');
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
			redirect('Admin/cSiswa');
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
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/navbar');
			$this->load->view('Admin/Layouts/aside');
			$this->load->view('Admin/siswa/update', $data);
			$this->load->view('Admin/Layouts/footer');
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
			redirect('Admin/cSiswa');
		}
	}
	public function delete($id)
	{
		$this->msiswa->delete($id);
		$this->session->set_flashdata('success', 'Data siswa Berhasil Dihapus!');
		redirect('Admin/cSiswa');
	}

	//excel reader
	public function upload_excel()
	{
		include "asset/excel_reader2.php";
		// upload file xls
		$target = basename($_FILES['filepegawai']['name']);
		move_uploaded_file($_FILES['filepegawai']['tmp_name'], $target);

		// beri permisi agar file xls dapat di baca
		chmod($_FILES['filepegawai']['name'], 0777);

		// mengambil isi file xls
		$data = new Spreadsheet_Excel_Reader($_FILES['filepegawai']['name'], false);
		// menghitung jumlah baris data yang ada
		$jumlah_baris = $data->rowcount($sheet_index = 0);

		// jumlah default data yang berhasil di import
		$berhasil = 0;
		for ($i = 2; $i <= $jumlah_baris; $i++) {

			// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
			$id_user     = $this->session->userdata('id');
			$nama_siswa   = $data->val($i, 1);
			$kelas  = $data->val($i, 2);
			$angkatan  = $data->val($i, 3);
			$alamat  = $data->val($i, 4);
			$jk  = $data->val($i, 5);
			$nis  = $data->val($i, 6);
			$ttl  = $data->val($i, 7);

			if ($nama_siswa != "" && $kelas != "" && $angkatan != "" && $alamat != "" && $jk != "" && $nis != "" && $ttl != "") {
				// input data ke database (table data_pegawai)
				$this->db->query("INSERT into siswa values('','$id_user','$nama_siswa','$kelas','$angkatan','$alamat','$jk','$nis','$ttl','0')");
				$berhasil++;
			}
		}

		// hapus kembali file .xls yang di upload tadi
		unlink($_FILES['filepegawai']['name']);

		// alihkan halaman ke index.php
		redirect('WaliKelas/cSiswa');
	}
}

/* End of file cSiswa.php */
