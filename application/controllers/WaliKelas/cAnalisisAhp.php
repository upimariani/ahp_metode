<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAnalisisAhp extends CI_Controller
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
		$this->load->view('WaliKelas/Layouts/head');
		$this->load->view('WaliKelas/Layouts/navbar');
		$this->load->view('WaliKelas/Layouts/aside');
		$this->load->view('WaliKelas/AnalisisAhp/vAnalisis', $data);
		$this->load->view('WaliKelas/Layouts/footer');
	}
	public function create()
	{
		$data = array(
			'siswa' => $this->mAnalisisAhp->siswa()
		);
		$this->load->view('WaliKelas/Layouts/head');
		$this->load->view('WaliKelas/Layouts/navbar');
		$this->load->view('WaliKelas/Layouts/aside');
		$this->load->view('WaliKelas/AnalisisAhp/vPerhitungan', $data);
		$this->load->view('WaliKelas/Layouts/footer');
	}
	public function perhitunganAhp()
	{
		$this->form_validation->set_rules('siswa', 'Siswa', 'required');
		$this->form_validation->set_rules('kehadiran', 'Penilaian Kehadiran', 'required');
		$this->form_validation->set_rules('sikap', 'Penilaian Sikap', 'required');
		$this->form_validation->set_rules('raport', 'Penilaian Raport', 'required');


		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'siswa' => $this->mAnalisisAhp->siswa()
			);
			$this->load->view('WaliKelas/Layouts/head');
			$this->load->view('WaliKelas/Layouts/navbar');
			$this->load->view('WaliKelas/Layouts/aside');
			$this->load->view('WaliKelas/AnalisisAhp/vPerhitungan', $data);
			$this->load->view('WaliKelas/Layouts/footer');
		} else {
			$siswa = $this->input->post('siswa');
			$p_kehadiran = $this->input->post('kehadiran');
			$p_sikap = $this->input->post('sikap');
			$p_raport = $this->input->post('raport');

			//kosistensi
			//kehadiran = 0,681466667
			//sikap = 0,235633333
			//raport = 0,082833333

			$kehadiran = 0.681466667;
			$sikap = 0.235633333;
			$raport = 0.082833333;


			$ev_kehadiran = 0;
			$ev_sikap = 0;
			$ev_raport = 0;

			//kehadiran 
			if ($p_kehadiran <= 70) {
				$ev_kehadiran = 0.08286;
			} else if ($p_kehadiran <= 89) {
				$ev_kehadiran = 0.23566;
			} else if ($p_kehadiran <= 100) {
				$ev_kehadiran = 0.68148;
			}

			echo '<br>';

			//sikap
			if ($p_sikap <= 70) {
				$ev_sikap = 0.08286;
			} else if ($p_sikap <= 89) {
				$ev_sikap = 0.23566;
			} else if ($p_sikap <= 100) {
				$ev_sikap = 0.68148;
			}
			echo '<br>';

			//raport
			if ($p_raport <= 70) {
				$ev_raport = 0.08286;
			} else if ($p_raport <= 89) {
				$ev_raport = 0.23566;
			} else if ($p_raport <= 100) {
				$ev_raport = 0.68148;
			}

			$t_kehadiran = 0;
			$t_sikap = 0;
			$t_raport = 0;

			$t_kehadiran = $ev_kehadiran * $kehadiran;
			$t_sikap = $ev_sikap * $sikap;
			$t_raport = $ev_raport * $raport;

			$hasil = $t_kehadiran + $t_sikap + $t_raport;

			$data = array(
				'id_siswa' => $this->input->post('siswa'),
				'tgl_proses' => date('Y-m-d'),
				'p_kehadiran' => $p_kehadiran,
				'p_sikap' => $p_sikap,
				'p_raport' => $p_raport,
				'hasil' => $hasil,
				'approved' => '0'
			);
			$this->mAnalisisAhp->save_hasil($data);

			$id_siswa = $this->input->post('siswa');
			$data_status = array(
				'status' => '1'
			);
			$this->mAnalisisAhp->update_status($data_status, $id_siswa);
			$this->session->set_flashdata('success', 'Data Siswa Berhasil Dianalisis!!!');
			redirect('WaliKelas/cAnalisisAhp');
		}
	}
	public function edit_ahp($id)
	{
		$siswa = $this->input->post('siswa');
		$p_kehadiran = $this->input->post('kehadiran');
		$p_sikap = $this->input->post('sikap');
		$p_raport = $this->input->post('raport');

		//kosistensi
		//kehadiran = 0,681466667
		//sikap = 0,235633333
		//raport = 0,082833333

		$kehadiran = 0.681466667;
		$sikap = 0.235633333;
		$raport = 0.082833333;


		$ev_kehadiran = 0;
		$ev_sikap = 0;
		$ev_raport = 0;

		//kehadiran 
		if ($p_kehadiran <= 70) {
			$ev_kehadiran = 0.08286;
		} else if ($p_kehadiran <= 89) {
			$ev_kehadiran = 0.23566;
		} else if ($p_kehadiran <= 100) {
			$ev_kehadiran = 0.68148;
		}

		echo '<br>';

		//sikap
		if ($p_sikap <= 70) {
			$ev_sikap = 0.08286;
		} else if ($p_sikap <= 89) {
			$ev_sikap = 0.23566;
		} else if ($p_sikap <= 100) {
			$ev_sikap = 0.68148;
		}
		echo '<br>';

		//raport
		if ($p_raport <= 70) {
			$ev_raport = 0.08286;
		} else if ($p_raport <= 89) {
			$ev_raport = 0.23566;
		} else if ($p_raport <= 100) {
			$ev_raport = 0.68148;
		}

		$t_kehadiran = 0;
		$t_sikap = 0;
		$t_raport = 0;

		$t_kehadiran = $ev_kehadiran * $kehadiran;
		$t_sikap = $ev_sikap * $sikap;
		$t_raport = $ev_raport * $raport;

		$hasil = $t_kehadiran + $t_sikap + $t_raport;

		$data = array(
			'tgl_proses' => date('Y-m-d'),
			'p_kehadiran' => $p_kehadiran,
			'p_sikap' => $p_sikap,
			'p_raport' => $p_raport,
			'hasil' => $hasil,
			'approved' => '0'
		);
		$this->db->where('id_ahp', $id);
		$this->db->update('analisis_ahp', $data);




		$this->session->set_flashdata('success', 'Data Siswa Berhasil Dianalisis!!!');
		redirect('WaliKelas/cAnalisisAhp');
	}
}

/* End of file cAnalisisAhp.php */
