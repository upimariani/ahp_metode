<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboardKepalaSekolah extends CI_Controller
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
			'hasil' => $this->db->query("SELECT * FROM `analisis_ahp` JOIN siswa ON analisis_ahp.id_siswa=siswa.id_siswa  GROUP BY kelas, angkatan ORDER BY kelas, angkatan DESC LIMIT 4")->result()
		);
		$this->load->view('KepalaSekolah/Layouts/head');
		$this->load->view('KepalaSekolah/Layouts/navbar');
		$this->load->view('KepalaSekolah/Layouts/aside');
		$this->load->view('KepalaSekolah/vdashboardkepalasekolah', $data);
		$this->load->view('KepalaSekolah/Layouts/footer');
	}
}

/* End of file cDashboard.php */
