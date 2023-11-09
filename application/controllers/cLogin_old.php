<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLogin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mLogin');
	}
	public function index()
	{
		$this->load->view('login');
	}
	public function login()
	{
		//mengambil data level terlebih dahulu
		$level = $this->input->post('level');
		if ($level == '1') {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$data = $this->mLogin->login($username, $password);
			if ($data) {
				$id = $data->id_user;
				$nama = $data->nama_user;
				$this->session->set_userdata('id', $id);
				$this->session->set_userdata('nama', $nama);
				if ($data->level_user == '1') {

					redirect('Admin/cDashboardAdmin');
				} else if ($data->level_user == '2') {
					redirect('WaliKelas/cDashboardWaliKelas');
				} else {
					redirect('KepalaSekolah/cDashboardKepalaSekolah');
				}
			} else {
				$this->session->set_flashdata('error', 'Username dan Password Salah!');
				redirect('');
			}
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$data = $this->mLogin->login_guru($username, $password);
			if ($data) {
				$id_guru = $data->id_guru;
				$mapel = $data->mapel;
				$nama = $data->nama_guru;

				$array = array(
					'id' => $id_guru,
					'mapel' => $mapel,
					'nama' => $nama
				);

				$this->session->set_userdata($array);

				redirect('GuruMapel/cDashboardGuru', 'refresh');
			} else {
				$this->session->set_flashdata('error', 'Username dan Password Salah!');
				redirect('');
			}
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('mapel');
		$this->session->set_flashdata('success', 'Anda Berhasil LogOut!');
		redirect('');
	}
}

/* End of file cLogin.php */
