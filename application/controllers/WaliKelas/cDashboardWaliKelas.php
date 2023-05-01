<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboardWaliKelas extends CI_Controller
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
		$this->load->view('WaliKelas/Layouts/head');
		$this->load->view('WaliKelas/Layouts/navbar');
		$this->load->view('WaliKelas/Layouts/aside');
		$this->load->view('dashboard', $data);
		$this->load->view('WaliKelas/Layouts/footer');
	}
}

/* End of file cDashboard.php */
