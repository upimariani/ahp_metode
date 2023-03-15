<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mAnalisisAhp extends CI_Model
{
	public function siswa()
	{
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->where('status=0');

		return $this->db->get()->result();
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
}

/* End of file mAnalisisAhp.php */
