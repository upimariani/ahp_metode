<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mLogin extends CI_Model
{
	public function login($username, $password)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where(array(
			'username' => $username,
			'password' => $password
		));
		return $this->db->get()->row();
	}
	public function login_guru($username, $password)
	{
		$this->db->select('*');
		$this->db->from('guru_mapel');
		$this->db->where(array(
			'username_guru' => $username,
			'password_guru' => $password
		));
		return $this->db->get()->row();
	}
}

/* End of file mLogin.php */
