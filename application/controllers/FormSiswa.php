<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FormSiswa extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('username')) {
			redirect('Login');
		}
		$this->load->model("Siswa_Model");

		$this->load->helper('file');
		$this->load->library('upload');
		$this->load->library('form_validation');
	}


	public function index()
	{
		$this->load->view('form_siswa');
	}

	public function add_data()
	{
		$tanggal = date('Ymd_His');
		$pengguna = $this->session->userdata('nama');

		$this->load->library('upload');

		// Ambil data teks dari form
		$data = [
			'tanggal_formulir' => date('Y-m-d H:i:s'), // Menggunakan timestamp saat ini
			'id_user'          => $this->session->userdata('id_user'),
			'nama'             => $this->input->post('nama'),
			'nik'              => $this->input->post('nik'),
			'alamat'           => $this->input->post('alamat'),
			'agama'            => $this->input->post('agama'),
			'tanggal_lahir'    => $this->input->post('tanggal_lahir'),
			'asal_sekolah'     => $this->input->post('asal_sekolah'),
			'anak_ke'          => $this->input->post('anak_ke'),
			'saudara'          => $this->input->post('saudara'),
			'jenis_kelamin'    => $this->input->post('jenis_kelamin'),

			// Data Ayah
			'nama_a'          => $this->input->post('nama_a'),
			'nik_a'           => $this->input->post('nik_a'),
			'alamat_a'        => $this->input->post('alamat_a'),
			'agama_a'         => $this->input->post('agama_a'),
			'tanggal_lahir_a' => $this->input->post('tanggal_lahir_a'),
			'email_a'         => $this->input->post('email_a'),
			'profesi_a'       => $this->input->post('profesi_a'),
			'no_hp_a'         => $this->input->post('no_hp_a'),
			'penghasilan_a'   => $this->input->post('penghasilan_a'),

			// Data Ibu
			'nama_b'          => $this->input->post('nama_b'),
			'nik_b'           => $this->input->post('nik_b'),
			'alamat_b'        => $this->input->post('alamat_b'),
			'agama_b'         => $this->input->post('agama_b'),
			'tanggal_lahir_b' => $this->input->post('tanggal_lahir_b'),
			'email_b'         => $this->input->post('email_b'),
			'profesi_b'       => $this->input->post('profesi_b'),
			'no_hp_b'         => $this->input->post('no_hp_b'),
			'penghasilan_b'   => $this->input->post('penghasilan_b'),

			//Token & Status
			'status'   => '1'
		];


		$this->session->set_flashdata('form_data', $data); //Menyimpan ke Flashdata agar jika gagal data form tidak holang dan tidak mengetik ulang


		$upload_path = './uploads/';  // Direktori penyimpanan file

		// Pastikan folder ada
		if (!is_dir($upload_path)) {
			mkdir($upload_path, 0777, TRUE);
		}

		// --- UPLOAD FOTO 3x4 ---
		if (!empty($_FILES['foto']['name'])) {
			$config_foto = [
				'upload_path'   => $upload_path,
				'allowed_types' => 'jpg|jpeg|png',
				'max_size'      => 2048, // Maksimum 2MB
				'file_name'     => 'foto_' . $pengguna . '_' . $tanggal,
				'overwrite'  => TRUE
			];

			$this->upload->initialize($config_foto);

			if ($this->upload->do_upload('foto')) {
				$data['foto'] = $this->upload->data('file_name');
			} else {
				$this->session->set_flashdata('errors', 'Upload foto gagal: ' . $this->upload->display_errors());
				redirect('FormSiswa');
				return;
			}
		}

		// --- UPLOAD FILE KK (PDF) ---
		if (!empty($_FILES['dokumen_kk']['name'])) {
			$config_kk = [
				'upload_path'   => $upload_path,
				'allowed_types' => 'pdf',
				'max_size'      => 2048,
				'file_name'     => 'kk_' . $pengguna . '_' . $tanggal,
				'overwrite'  => TRUE
			];

			$this->upload->initialize($config_kk);

			if ($this->upload->do_upload('dokumen_kk')) {
				$data['dokumen_kk'] = $this->upload->data('file_name');
			} else {
				$this->session->set_flashdata('errors', 'Upload KK gagal: ' . $this->upload->display_errors());
				redirect('FormSiswa');
				return;
			}
		}

		// --- UPLOAD FILE AKTA KELAHIRAN (PDF) ---
		if (!empty($_FILES['dokumen_akta']['name'])) {
			$config_akta = [
				'upload_path'   => $upload_path,
				'allowed_types' => 'pdf',
				'max_size'      => 2048,
				'file_name'     => 'akta_' . $pengguna . '_' . $tanggal,
				'overwrite'  => TRUE
			];

			$this->upload->initialize($config_akta);

			if ($this->upload->do_upload('dokumen_akta')) {
				$data['dokumen_akta'] = $this->upload->data('file_name');
			} else {
				$this->session->set_flashdata('errors', 'Upload Akta gagal: ' . $this->upload->display_errors());
				redirect('FormSiswa');
				return;
			}
		}

		// Simpan data ke database
		if ($this->Siswa_Model->insert_data($data)) {

			$this->session->unset_userdata('form_data');  // Hapus flashdata form_data setelah sukses menyimpan
			$this->session->set_flashdata('success', 'Data berhasil disimpan!');
			redirect('Dashboard');
		} else {
			$this->session->set_flashdata('errors', 'Gagal menyimpan data!');
			redirect('FormSiswa');
		}
	}

	public function edit($id_formulir = null)
	{
		$siswa = $this->Siswa_Model;

		$data["siswa"] = $siswa->getById($id_formulir);
		if (!$data["siswa"]) {
			redirect('404_override');
		}

		$this->load->view('form_edit_siswa', $data);
	}

	public function edit_data()
	{
		$tanggal = date('Ymd_His');
		$pengguna = $this->session->userdata('nama');
		$id_formulir = $this->input->post('id_formulir');
		// Ambil data siswa berdasarkan id_formulir
		$siswa_lama = $this->Siswa_Model->getById($id_formulir);
		if (!$siswa_lama) {
			$this->session->set_flashdata('errors', 'Data tidak ditemukan.');
			redirect('FormSiswa');
			return;
		}

		// Ambil data teks dari form
		$data = [
			'tanggal_formulir' => date('Y-m-d H:i:s'),
			'id_formulir'      => $id_formulir,
			'id_user'          => $this->session->userdata('id_user'),
			'nama'             => $this->input->post('nama'),
			'nik'              => $this->input->post('nik'),
			'alamat'           => $this->input->post('alamat'),
			'agama'            => $this->input->post('agama'),
			'tanggal_lahir'    => $this->input->post('tanggal_lahir'),
			'asal_sekolah'     => $this->input->post('asal_sekolah'),
			'anak_ke'          => $this->input->post('anak_ke'),
			'saudara'          => $this->input->post('saudara'),
			'jenis_kelamin'    => $this->input->post('jenis_kelamin'),

			// Data Ayah
			'nama_a'          => $this->input->post('nama_a'),
			'nik_a'           => $this->input->post('nik_a'),
			'alamat_a'        => $this->input->post('alamat_a'),
			'agama_a'         => $this->input->post('agama_a'),
			'tanggal_lahir_a' => $this->input->post('tanggal_lahir_a'),
			'email_a'         => $this->input->post('email_a'),
			'profesi_a'       => $this->input->post('profesi_a'),
			'no_hp_a'         => $this->input->post('no_hp_a'),
			'penghasilan_a'   => $this->input->post('penghasilan_a'),

			// Data Ibu
			'nama_b'          => $this->input->post('nama_b'),
			'nik_b'           => $this->input->post('nik_b'),
			'alamat_b'        => $this->input->post('alamat_b'),
			'agama_b'         => $this->input->post('agama_b'),
			'tanggal_lahir_b' => $this->input->post('tanggal_lahir_b'),
			'email_b'         => $this->input->post('email_b'),
			'profesi_b'       => $this->input->post('profesi_b'),
			'no_hp_b'         => $this->input->post('no_hp_b'),
			'penghasilan_b'   => $this->input->post('penghasilan_b'),

			//Token & Status
			'status'   => '1'
		];

		$upload_path = './uploads/';

		// Pastikan folder ada
		if (!is_dir($upload_path)) {
			mkdir($upload_path, 0777, TRUE);
		}

		// Fungsi untuk menghapus file lama
		function hapus_file_lama($file_lama)
		{
			if ($file_lama && file_exists('./uploads/' . $file_lama)) {
				unlink('./uploads/' . $file_lama);
			}
		}

		// Upload Foto
		if (!empty($_FILES['foto']['name'])) {
			hapus_file_lama($siswa_lama->foto);
			$config_foto = [
				'upload_path'   => $upload_path,
				'allowed_types' => 'jpg|jpeg|png',
				'max_size'      => 2048,
				'file_name'     => 'foto_' . $pengguna . '_' . $tanggal,
				'overwrite'     => TRUE
			];
			$this->upload->initialize($config_foto); //library upload & helper file pada parent construct
			if ($this->upload->do_upload('foto')) {
				$data['foto'] = $this->upload->data('file_name');
			}
		}

		// Upload KK
		if (!empty($_FILES['dokumen_kk']['name'])) {
			hapus_file_lama($siswa_lama->dokumen_kk);
			$config_kk = [
				'upload_path'   => $upload_path,
				'allowed_types' => 'pdf',
				'max_size'      => 2048,
				'file_name'     => 'kk_' . $pengguna . '_' . $tanggal,
				'overwrite'     => TRUE
			];
			$this->upload->initialize($config_kk);
			if ($this->upload->do_upload('dokumen_kk')) {
				$data['dokumen_kk'] = $this->upload->data('file_name');
			}
		}

		// Upload Akta Kelahiran
		if (!empty($_FILES['dokumen_akta']['name'])) {
			hapus_file_lama($siswa_lama->dokumen_akta);
			$config_akta = [
				'upload_path'   => $upload_path,
				'allowed_types' => 'pdf',
				'max_size'      => 2048,
				'file_name'     => 'akta_' . $pengguna . '_' . $tanggal,
				'overwrite'     => TRUE
			];
			$this->upload->initialize($config_akta);
			if ($this->upload->do_upload('dokumen_akta')) {
				$data['dokumen_akta'] = $this->upload->data('file_name');
			}
		}

		// Update data ke database
		if ($this->Siswa_Model->update_data($id_formulir, $data)) {
			$this->session->set_flashdata('success', 'Data berhasil diperbarui!');
			redirect('Dashboard/detail/' . $id_formulir);
		} else {
			$this->session->set_flashdata('errors', 'Gagal memperbarui data!');
			redirect('FormSiswa/edit/' . $id_formulir);
		}
	}
}
