<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mNilaiSiswa extends CI_Model
{
	public function siswa($kelas, $angkatan)
	{
		return $this->db->query("SELECT * FROM siswa WHERE kelas='" . $kelas . "' AND angkatan='" . $angkatan . "'")->result();
	}
	public function view_nilai($kelas, $angkatan)
	{
		return $this->db->query("SELECT * FROM `siswa` LEFT JOIN nilai_raport ON siswa.id_siswa=nilai_raport.id_siswa LEFT JOIN guru_mapel ON nilai_raport.id_guru=guru_mapel.id_guru WHERE kelas='" . $kelas . "' AND angkatan='" . $angkatan . "' AND guru_mapel.id_guru='" . $this->session->userdata('id') . "'")->result();
	}
	public function insert_nilai($data)
	{
		$this->db->insert('nilai_raport', $data);
	}
}

/* End of file mNilaiSiswa.php */
