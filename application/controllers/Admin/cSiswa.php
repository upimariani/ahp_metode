<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cSiswa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('msiswa');
		$this->load->library(array('excel', 'session'));
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
		$this->load->view('Admin/siswa/siswa', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function create()
	{
		$this->form_validation->set_rules('walikelas', 'Wali Kelas', 'required');
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
				'id_user' => $this->input->post('walikelas'),
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

	// UPLOAD DATA EXCEL KE DATABASE
	public function upload()
	{
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/navbar');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/siswa/createupload');
		$this->load->view('Admin/Layouts/footer');
	}

	public function import_excel()
	{
		if (isset($_FILES["fileExcel"]["name"])) {
			$path = $_FILES["fileExcel"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			foreach ($object->getWorksheetIterator() as $worksheet) {
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();
				for ($row = 2; $row <= $highestRow; $row++) {
					$nama_siswa = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$kelas = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$angkatan = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$alamat = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
					$jk = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
					$nis = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
					$ttl = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
					$temp_data[] = array(
						'id_user' => $this->session->userdata('id'),
						'nama_siswa' => $nama_siswa,
						'kelas' => $kelas,
						'angkatan' => $angkatan,
						'alamat' => $alamat,
						'jk' => $jk,
						'nis' => $nis,
						'ttl' => $ttl,
					);
				}
			}
			$this->load->model('msiswa');
			$insert = $this->msiswa->insertxcell($temp_data);
			if ($insert) {
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil di Import ke Database');
				redirect('Admin/cSiswa');
				// redirect($_SERVER['HTTP_REFERER']);
			} else {
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Terjadi Kesalahan');
				redirect($_SERVER['HTTP_REFERER']);
			}
		} else {
			echo "Tidak ada file yang masuk";
		}
	}
}

/* End of file cSiswa.php */
