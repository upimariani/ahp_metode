<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cInformasiSiswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mDashboard');
	}


	public function index()
	{
		$data = array(
			'hasil' => $this->mDashboard->hasil_ahp()
		);
		$this->load->view('vList', $data);
	}
}

/* End of file cInformasiSiswa.php */
