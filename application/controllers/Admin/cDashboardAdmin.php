<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboardAdmin extends CI_Controller
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
			'hasil' => $this->mDashboard->hasil_ahp()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/navbar');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/vdashboardAdmin', $data);
		$this->load->view('Admin/Layouts/footer');
	}
}

/* End of file cDashboardAdmin.php */
