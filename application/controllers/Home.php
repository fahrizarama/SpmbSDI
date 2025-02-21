<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('username')) {
			redirect('Login');
		}

		$this->load->model("Siswa_Model");
		$this->load->model("Api_Model");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["siswa"] = $this->Siswa_Model->getRequest();
		$this->load->view('admin/data_pendaftar', $data);
	}

	public function acc($id_formulir)
	{

		$this->db->select('api_token');
		$api = $this->db->get('api')->row();

		$this->db->select('*');
		$this->db->where('id_formulir', $id_formulir);
		$query = $this->db->get('formulir');


		if ($query->num_rows() > 0) {
			$formulir = $query->row();

			$nama = $formulir->nama;
			$tanggal_formulir = $formulir->tanggal_formulir;
			$nik = $formulir->nik;
			$nama_a = $formulir->nama_a;
			$nama_b = $formulir->nama_b;
			$alamat = $formulir->alamat;
			$no_hp_a = $formulir->no_hp_a;
			$no_hp_b = $formulir->no_hp_b;
			$api_token = $api->api_token;

			$this->db->where('id_formulir', $id_formulir);
			if ($this->db->update('formulir', array('status' => '2'))) {
				$this->kirim_pesanAcc($nama, $tanggal_formulir, $nik, $nama_a, $nama_b, $alamat, $no_hp_a, $no_hp_b, $api_token);
				$response = array('success' => true);
			} else {

				$response = array('success' => false);
			}

			header('Content-Type: application/json');
			echo json_encode($response);
		} else {
			$response = array('success' => false);
		}
	}

	public function tolak($id_formulir)
	{
		$this->db->select('api_token');
		$api = $this->db->get('api')->row();

		$this->db->select('*');
		$this->db->where('id_formulir', $id_formulir);
		$query = $this->db->get('formulir');


		if ($query->num_rows() > 0) {
			$formulir = $query->row();

			$nama = $formulir->nama;
			$tanggal_formulir = $formulir->tanggal_formulir;
			$nik = $formulir->nik;
			$nama_a = $formulir->nama_a;
			$nama_b = $formulir->nama_b;
			$alamat = $formulir->alamat;
			$no_hp_a = $formulir->no_hp_a;
			$no_hp_b = $formulir->no_hp_b;
			$api_token = $api->api_token;

			$this->db->where('id_formulir', $id_formulir);
			if ($this->db->update('formulir', array('status' => '3'))) {
				$this->kirim_pesanTolak($nama, $tanggal_formulir, $nik, $nama_a, $nama_b, $alamat, $no_hp_a, $no_hp_b, $api_token);
				$response = array('success' => true);
			} else {

				$response = array('success' => false);
			}

			header('Content-Type: application/json');
			echo json_encode($response);
		} else {
			$response = array('success' => false);
		}
	}

	public function kirim_pesanAcc($nama, $tanggal_formulir, $nik, $nama_a, $nama_b, $alamat, $no_hp_a, $no_hp_b, $api_token)
	{
		// Simpan API token dari parameter
		$token = $api_token;

		// Format pesan yang akan dikirim
		$pesan = "> Pendaftaran SDI
	*Selamat Data Anda Telah Berhasil Terkonfirmasi*
	
	_Detail Data :_
	_Nama:_ $nama
	_NIK:_ $nik
	_Nama Ayah:_ $nama_a
	_Nama Ibu:_ $nama_b
	_Alamat:_ $alamat
	_Tanggal Pendaftaran:_ $tanggal_formulir
	
	_Status Data: Terkonfirmasi
	
	*Harap Login dan Cetak Bukti Konfirmasi*  ";

		// Simpan nomor yang akan dikirimi pesan dalam array
		$nomor_tujuan = [$no_hp_a, $no_hp_b];

		// Lakukan pengiriman ke setiap nomor dalam array
		foreach ($nomor_tujuan as $nomor) {
			// Buat data yang akan dikirim dalam request
			$data = array(
				"target" => $nomor, // Nomor tujuan yang sedang diproses
				"message" => $pesan, // Pesan yang dikirim
			);

			// Inisialisasi cURL untuk mengirim request ke API Fonnte
			$ch = curl_init();

			// Set URL endpoint API Fonnte
			curl_setopt($ch, CURLOPT_URL, "https://api.fonnte.com/send");

			// Set metode HTTP menjadi POST
			curl_setopt($ch, CURLOPT_POST, 1);

			// Set data yang akan dikirim dengan format URL-encoded
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

			// Set header authorization dengan token API
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				"Authorization: " . $token
			));

			// Set agar respons dikembalikan sebagai string
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			// Eksekusi request dan simpan responsnya
			$response = curl_exec($ch);

			// Periksa apakah request berhasil atau gagal
			if ($response === false) {
				// Jika terjadi kesalahan, simpan log error
				log_message('error', 'CURL Error: ' . curl_error($ch));
			} else {
				// Periksa kode status HTTP
				$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

				// Jika kode status bukan 200, simpan log error
				if ($http_code !== 200) {
					log_message('error', "HTTP Error: Response code $http_code saat mengirim ke $nomor");
				}
			}

			// Tutup koneksi cURL setelah selesai
			curl_close($ch);
		}
	}



	public function kirim_pesanTolak($nama, $tanggal_formulir, $nik, $nama_a, $nama_b, $alamat, $no_hp_a, $no_hp_b, $api_token)
	{
		// Simpan API token dari parameter
		$token = $api_token;

		// Format pesan untuk penolakan
		$pesan = "> Pendaftaran SDI
*Mohon Maaf, Pendaftaran Anda Tidak Dapat Diterima*

_Detail Data :_
_Nama:_ $nama
_NIK:_ $nik
_Nama Ayah:_ $nama_a
_Nama Ibu:_ $nama_b
_Alamat:_ $alamat
_Tanggal Pendaftaran:_ $tanggal_formulir

_Status Data: *Ditolak*

Silakan hubungi pihak sekolah untuk informasi lebih lanjut.";

		// Simpan nomor yang akan dikirimi pesan dalam array
		$nomor_tujuan = [$no_hp_a, $no_hp_b];

		// Lakukan pengiriman ke setiap nomor dalam array
		foreach ($nomor_tujuan as $nomor) {
			// Buat data yang akan dikirim dalam request
			$data = array(
				"target" => $nomor, // Nomor tujuan yang sedang diproses
				"message" => $pesan, // Pesan yang dikirim
			);

			// Inisialisasi cURL untuk mengirim request ke API Fonnte
			$ch = curl_init();

			// Set URL endpoint API Fonnte
			curl_setopt($ch, CURLOPT_URL, "https://api.fonnte.com/send");

			// Set metode HTTP menjadi POST
			curl_setopt($ch, CURLOPT_POST, 1);

			// Set data yang akan dikirim dengan format URL-encoded
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

			// Set header authorization dengan token API
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				"Authorization: " . $token
			));

			// Set agar respons dikembalikan sebagai string
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			// Eksekusi request dan simpan responsnya
			$response = curl_exec($ch);

			// Periksa apakah request berhasil atau gagal
			if ($response === false) {
				// Jika terjadi kesalahan, simpan log error
				log_message('error', 'CURL Error: ' . curl_error($ch));
			} else {
				// Periksa kode status HTTP
				$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

				// Jika kode status bukan 200, simpan log error
				if ($http_code !== 200) {
					log_message('error', "HTTP Error: Response code $http_code saat mengirim ke $nomor");
				}
			}

			// Tutup koneksi cURL setelah selesai
			curl_close($ch);
		}
	}
}
