<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mAnalisisAhp extends CI_Model
{
	public function siswa()
	{
		return $this->db->query("SELECT COUNT(id_nilai)as jml_nilai, SUM(nilai) as rate, nama_siswa, kelas, angkatan, siswa.id_siswa, status FROM `siswa` JOIN nilai_raport ON nilai_raport.id_siswa=siswa.id_siswa WHERE status='0' AND id_user='" . $this->session->userdata('id') . "' GROUP BY siswa.id_siswa")->result();
	}
	public function save_hasil($data)
	{
		$this->db->insert('analisis_ahp', $data);
	}
	public function select()
	{
		$this->db->select('*');
		$this->db->from('analisis_ahp');
		$this->db->join('siswa', 'analisis_ahp.id_siswa = siswa.id_siswa', 'left');
		$this->db->order_by('approved', 'asc');
		$this->db->where('id_user', $this->session->userdata('id'));
		return $this->db->get()->result();
	}
	public function update_status($data, $id)
	{
		$this->db->where('id_siswa', $id);
		$this->db->update('siswa', $data);
	}

	//kepala sekolah
	public function approved($id, $data)
	{
		$this->db->where('id_ahp', $id);
		$this->db->update('analisis_ahp', $data);
	}
	public function periode()
	{
		return $this->db->query("SELECT * FROM `siswa` GROUP BY kelas, angkatan")->result();
	}
	public function view_data_periode($kelas, $angkatan)
	{
		return $this->db->query("SELECT * FROM siswa JOIN analisis_ahp ON analisis_ahp.id_siswa=siswa.id_siswa WHERE kelas='" . $kelas . "' AND angkatan='" . $angkatan . "' ORDER BY hasil DESC")->result();
	}
}

/* End of file mAnalisisAhp.php */
