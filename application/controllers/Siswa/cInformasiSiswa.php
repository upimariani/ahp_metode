<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cInformasiSiswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mDashboard');
		$this->load->model('mAnalisisAhp');
	}


	public function index()
	{
		$data = array(
			'periode' => $this->mAnalisisAhp->periode(),

		);
		$this->load->view('vList', $data);
	}
	public function viewList($kelas, $angkatan)
	{
		$data = array(
			'view_periode' => $this->mDashboard->hasil_ahp($kelas, $angkatan),
			'kelas' => $kelas,
			'angkatan' => $angkatan
		);
		$this->load->view('vViewList', $data);
	}
}

/* End of file cInformasiSiswa.php */
