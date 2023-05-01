<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mSiswa extends CI_Model
{
	public function insert($data)
	{
		$this->db->insert('siswa', $data);
	}
	public function select()
	{
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->where('id_user', $this->session->userdata('id'));
		return $this->db->get()->result();
	}
	public function edit($id)
	{
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->where('id_siswa', $id);
		return $this->db->get()->row();
	}
	public function update($id, $data)
	{
		$this->db->where('id_siswa', $id);
		$this->db->update('siswa', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_siswa', $id);
		$this->db->delete('siswa');
	}
}

/* End of file msiswa.php */
