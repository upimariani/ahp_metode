<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mDashboard extends CI_Model
{
	public function jml()
	{
		$data['user'] = $this->db->query("SELECT COUNT(id_user) as jml_user FROM `user`")->row();
		$data['siswa'] = $this->db->query("SELECT COUNT(id_siswa) as jml_siswa FROM `siswa`")->row();
		return $data;
	}
	public function hasil_ahp($kelas, $angkatan)
	{
		return $this->db->query("SELECT * FROM siswa JOIN analisis_ahp ON analisis_ahp.id_siswa=siswa.id_siswa WHERE kelas='" . $kelas . "' AND angkatan='" . $angkatan . "' AND approved='1' ORDER BY hasil DESC limit 10")->result();
	}
	public function hasil()
	{
		return $this->db->query("SELECT * FROM siswa JOIN analisis_ahp ON analisis_ahp.id_siswa=siswa.id_siswa WHERE approved='1' ORDER BY hasil DESC limit 10")->result();
	}
}

/* End of file mDashboard.php */
