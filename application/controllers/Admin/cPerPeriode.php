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
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/navbar');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/vPerPeriode', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function kelas($angkatan)
	{
		$data = array(
			'kelas' => $this->mAnalisisAhp->kelas($angkatan)
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/navbar');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/vKelas', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function view_data($kelas, $angkatan)
	{
		$data = array(
			'view_periode' => $this->mAnalisisAhp->view_data_periode($kelas, $angkatan),
			'kelas' => $kelas,
			'angkatan' => $angkatan
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/navbar');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/vViewPeriode', $data);
		$this->load->view('Admin/Layouts/footer');
	}
}

/* End of file cPerPeriode.php */
