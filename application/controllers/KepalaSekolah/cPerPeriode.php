<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPerPeriode extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mAnalisisAhp');
	}
	public function index()
	{
		$data = array(
			'periode' => $this->mAnalisisAhp->periode()
		);
		$this->load->view('KepalaSekolah/Layouts/head');
		$this->load->view('KepalaSekolah/Layouts/navbar');
		$this->load->view('KepalaSekolah/Layouts/aside');
		$this->load->view('KepalaSekolah/vPerPeriode', $data);
		$this->load->view('KepalaSekolah/Layouts/footer');
	}
	public function view_data($kelas, $angkatan)
	{
		$data = array(
			'view_periode' => $this->mAnalisisAhp->view_data_periode($kelas, $angkatan),
			'kelas' => $kelas,
			'angkatan' => $angkatan
		);
		$this->load->view('KepalaSekolah/Layouts/head');
		$this->load->view('KepalaSekolah/Layouts/navbar');
		$this->load->view('KepalaSekolah/Layouts/aside');
		$this->load->view('KepalaSekolah/vViewPeriode', $data);
		$this->load->view('KepalaSekolah/Layouts/footer');
	}
}

/* End of file cPerPeriode.php */
