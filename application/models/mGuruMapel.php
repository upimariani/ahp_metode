<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mGuruMapel extends CI_Model
{
	public function insert($data)
	{
		$this->db->insert('guru_mapel', $data);
	}
	public function select()
	{
		$this->db->select('*');
		$this->db->from('guru_mapel');
		return $this->db->get()->result();
	}
	public function update($id, $data)
	{
		$this->db->where('id_guru', $id);
		$this->db->update('guru_mapel', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_guru', $id);
		$this->db->delete('guru_mapel');
	}
}

/* End of file mGuruMapel.php */
