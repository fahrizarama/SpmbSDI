<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('username')) {
			redirect('Login');
		}

		$this->load->model("Siswa_Model");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["siswa"] = $this->Siswa_Model->getRequest();
		if (!$data["siswa"]) {
			$this->session->set_flashdata('tanya', 'Anda Belum Mengajukan Pendaftaran');
			$this->load->view('dashboard');
		} else {
			$this->load->view('dashboard', $data);
		}
	}


	public function detail($id_formulir = null)
	{
		$siswa = $this->Siswa_Model;

		$data["siswa"] = $siswa->getById($id_formulir);
		if (!$data["siswa"]) {
			redirect('404_override');
		}

		$this->load->view('detail_form', $data);
	}



	public function data_pendaftar() //untuk admin
	{
		$this->load->view('data_pendaftar');
	}
}
