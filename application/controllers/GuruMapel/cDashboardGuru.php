<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboardGuru extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mDashboard');
	}

	public function index()
	{

		$data = array(
			'jml' => $this->mDashboard->jml(),
			'hasil' => $this->mDashboard->hasil()
		);
		$this->load->view('GuruMapel/Layouts/head');
		$this->load->view('GuruMapel/Layouts/navbar');
		$this->load->view('GuruMapel/Layouts/aside');
		$this->load->view('GuruMapel/vDashboardGuru', $data);
		$this->load->view('GuruMapel/Layouts/footer');
	}
}

/* End of file cDashboardGuru.php */
