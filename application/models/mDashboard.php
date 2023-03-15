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
	public function hasil_ahp()
	{
		$this->db->select('*');
		$this->db->from('analisis_ahp');
		$this->db->join('siswa', 'siswa.id_siswa = analisis_ahp.id_siswa', 'left');
		$this->db->where('approved=1');

		$this->db->order_by('hasil', 'desc');
		return $this->db->get()->result();
	}
}

/* End of file mDashboard.php */
