<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cHasilAhp extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mAnalisisAhp');
	}


	public function index()
	{
		$data = array(
			'analisis' => $this->mAnalisisAhp->select()
		);
		$this->load->view('KepalaSekolah/Layouts/head');
		$this->load->view('KepalaSekolah/Layouts/navbar');
		$this->load->view('KepalaSekolah/Layouts/aside');
		$this->load->view('KepalaSekolah/vAnalisis', $data);
		$this->load->view('KepalaSekolah/Layouts/footer');
	}
	public function approved($id)
	{
		$data = array(
			'approved' => '1'
		);
		$this->mAnalisisAhp->approved($id, $data);
		$this->session->set_flashdata('success', 'Hasil Analisis Berhasil DiApproved!!!');
		redirect('KepalaSekolah/cHasilAhp');
	}
}

/* End of file cHasilAhp.php */
