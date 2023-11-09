<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cNilaiSiswa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mAnalisisAhp');
		$this->load->model('mNilaiSiswa');
		$this->load->library(array('excel', 'session'));
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
	public function update($id, $kelas, $angkatan)
	{
		$data = array(

			'nilai' => $this->input->post('nilai')
		);
		$this->db->where('id_nilai', $id);
		$this->db->update('nilai_raport', $data);


		$this->session->set_flashdata('success', 'Data Nilai Berhasil Diperbaharui!!!');
		redirect('GuruMapel/cNilaiSiswa/view_siswa/' . $kelas . '/' . $angkatan);
	}
	public function delete($id, $kelas, $angkatan)
	{
		$this->db->where('id_nilai', $id);
		$this->db->delete('nilai_raport');
		$this->session->set_flashdata('success', 'Data Nilai Berhasil Dihapus!!!');
		redirect('GuruMapel/cNilaiSiswa/view_siswa/' . $kelas . '/' . $angkatan);
	}
	public function nilai($kelas, $angkatan)
	{
		$id_guru = $this->session->userdata('id');
		$id_siswa = $this->input->post('siswa_nilai');
		//cek data
		$cek_data = $this->db->query("SELECT * FROM `nilai_raport` WHERE nama_siswa='" . $id_siswa . "' AND id_guru='" . $id_guru . "'")->row();
		if ($cek_data) {
			$this->session->set_flashdata('success', 'Data Nilai Sudah Tersedia!!!');
			redirect('GuruMapel/cNilaiSiswa/view_siswa/' . $kelas . '/' . $angkatan);
		} else {
			$data = array(
				'nama_siswa' => $this->input->post('siswa_nilai'),
				'id_guru' => $this->session->userdata('id'),
				'nilai' => $this->input->post('nilai'),
			);
			$this->mNilaiSiswa->insert_nilai($data);
			$this->session->set_flashdata('success', 'Data Nilai Berhasil Ditambahkan!!!');
			redirect('GuruMapel/cNilaiSiswa/view_siswa/' . $kelas . '/' . $angkatan);
		}
	}

	//UPDATE NILAI DENGAN EXCEL
	public function viewupload($kelas, $angkatan)
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

	public function nilaiexcel($kelas, $angkatan)
	{
		if (isset($_FILES["fileExcel"]["name"])) {
			$path = $_FILES["fileExcel"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			foreach ($object->getWorksheetIterator() as $worksheet) {
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();
				for ($row = 2; $row <= $highestRow; $row++) {

					$nama_siswa = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$nilai = $worksheet->getCellByColumnAndRow(2, $row)->getValue();

					$temp_data[] = array(
						'id_guru' => $this->session->userdata('id'),
						'nama_siswa' => $nama_siswa,
						'nilai' => $nilai,
					);
				}
			}
			$this->load->model('mNilaiSiswa');
			$insert = $this->mNilaiSiswa->insertxcell($temp_data);
			if ($insert) {
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil di Import ke Database');
				redirect('GuruMapel/cNilaiSiswa/viewupload/' . $kelas . '/' . $angkatan);
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

/* End of file cNilaiSiswa.php */
