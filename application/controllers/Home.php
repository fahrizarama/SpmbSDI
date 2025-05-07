<?php
defined('BASEPATH') or exit('No direct script access allowed');


require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;

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
		$this->load->model("Auth_Model");
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function index()
	{

		$data["siswa"] = $this->Siswa_Model->getSiswaAll();
		$data["jumlahPendaftar"] = count($data["siswa"]); // Hitung jumlah data yang diambil
		$data["siswaBaru"] = $this->Siswa_Model->getSiswaBaru();
		$data["jumlahBaru"] = count($data["siswaBaru"]); // Hitung jumlah data yang diambil
		$data["siswaTerima"] = $this->Siswa_Model->getSiswaTerima();
		$data["jumlahTerima"] = count($data["siswaTerima"]);
		$data["siswaTolak"] = $this->Siswa_Model->getSiswaTolak();
		$data["jumlahTolak"] = count($data["siswaTolak"]);
		$this->load->view('admin/data_pendaftar', $data);
	}

	public function diterima()
	{

		$data["siswa"] = $this->Siswa_Model->getSiswaAll();
		$data["jumlahPendaftar"] = count($data["siswa"]); // Hitung jumlah data yang diambil
		$data["siswaBaru"] = $this->Siswa_Model->getSiswaBaru();
		$data["jumlahBaru"] = count($data["siswaBaru"]); // Hitung jumlah data yang diambil
		$data["siswaTerima"] = $this->Siswa_Model->getSiswaTerima();
		$data["jumlahTerima"] = count($data["siswaTerima"]);
		$data["siswaTolak"] = $this->Siswa_Model->getSiswaTolak();
		$data["jumlahTolak"] = count($data["siswaTolak"]);
		$this->load->view('admin/data_pendaftar', $data);
	}

	public function ditolak()
	{

		$data["siswa"] = $this->Siswa_Model->getSiswaAll();
		$data["jumlahPendaftar"] = count($data["siswa"]); // Hitung jumlah data yang diambil
		$data["siswaBaru"] = $this->Siswa_Model->getSiswaBaru();
		$data["jumlahBaru"] = count($data["siswaBaru"]); // Hitung jumlah data yang diambil
		$data["siswaTerima"] = $this->Siswa_Model->getSiswaTerima();
		$data["jumlahTerima"] = count($data["siswaTerima"]);
		$data["siswaTolak"] = $this->Siswa_Model->getSiswaTolak();
		$data["jumlahTolak"] = count($data["siswaTolak"]);
		$this->load->view('admin/data_pendaftar', $data);
	}

	public function all()
	{

		$data["siswa"] = $this->Siswa_Model->getSiswaAll();
		$data["jumlahPendaftar"] = count($data["siswa"]); // Hitung jumlah data yang diambil
		$data["siswaBaru"] = $this->Siswa_Model->getSiswaBaru();
		$data["jumlahBaru"] = count($data["siswaBaru"]); // Hitung jumlah data yang diambil
		$data["siswaTerima"] = $this->Siswa_Model->getSiswaTerima();
		$data["jumlahTerima"] = count($data["siswaTerima"]);
		$data["siswaTolak"] = $this->Siswa_Model->getSiswaTolak();
		$data["jumlahTolak"] = count($data["siswaTolak"]);
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


	public function exportExcel()
	{
		// Ambil data dari model

		$segmen = $this->uri->segment(3); // Segmen ke-3 karena ini diakses dari "Home/exportExcel/diterima"
		if ($segmen == 'Yang Diterima') {
			$judul = 'diterima';
			$fileName = 'diterima';
			$dataSiswa = $this->Siswa_Model->getSiswaTerima();
		} elseif ($segmen == 'ditolak') {
			$judul = 'Yang Ditolak';
			$fileName = 'ditolak';
			$dataSiswa = $this->Siswa_Model->getSiswaTolak();
		} elseif ($segmen == 'all') {
			$judul = 'Semua Lengkap';
			$fileName = 'semua';
			$dataSiswa = $this->Siswa_Model->getSiswaAll();
		} else {
			$judul = 'Yang Perlu Divalidasi';
			$fileName = 'perlu_validasi';
			$dataSiswa = $this->Siswa_Model->getSiswaBaru();
		}

		// Buat objek Spreadsheet
		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();

		// Set judul dan tanggal download
		$sheet->setCellValue('B2', 'Data Siswa ' . $judul);
		$sheet->setCellValue('B3', 'Tanggal Download: ' . date('d-m-Y H:i:s'));

		// Gaya judul
		$sheet->getStyle('B2')->getFont()->setBold(true)->setSize(14);
		$sheet->getStyle('B3')->getFont()->setItalic(true);

		// Set header kolom mulai dari B5
		$headers = [
			'B5' => 'No',
			'C5' => 'Status',
			'D5' => 'Tanggal Formulir',
			'E5' => 'Nama User',
			'F5' => 'Nama Casis',
			'G5' => 'NIK',
			'H5' => 'Alamat',
			'I5' => 'Agama',
			'J5' => 'Tanggal Lahir',
			'K5' => 'Asal Sekolah',
			'L5' => 'Anak Ke',
			'M5' => 'Saudara',
			'N5' => 'Jenis Kelamin',
			'O5' => 'Nama Ayah',
			'P5' => 'NIK Ayah',
			'Q5' => 'Alamat Ayah',
			'R5' => 'Agama Ayah',
			'S5' => 'Tanggal Lahir Ayah',
			'T5' => 'Email Ayah',
			'U5' => 'Profesi Ayah',
			'V5' => 'No HP Ayah',
			'W5' => 'Penghasilan Ayah',
			'X5' => 'Nama Ibu',
			'Y5' => 'NIK Ibu',
			'Z5' => 'Alamat Ibu',
			'AA5' => 'Agama Ibu',
			'AB5' => 'Tanggal Lahir Ibu',
			'AC5' => 'Email Ibu',
			'AD5' => 'Profesi Ibu',
			'AE5' => 'No HP Ibu',
			'AF5' => 'Penghasilan Ibu',
			'AG5' => 'Foto',
			'AH5' => 'Dokumen KK',
			'AI5' => 'Dokumen Akta',
			'AJ5' => 'ID Formulir'
		];

		foreach ($headers as $cell => $header) {
			$sheet->setCellValue($cell, $header);
		}

		// Style header tabel
		$headerRange = 'B5:AJ5';
		$sheet->getStyle($headerRange)->applyFromArray([
			'font' => ['bold' => true],
			'alignment' => [
				'horizontal' => Alignment::HORIZONTAL_CENTER,
				'vertical' => Alignment::VERTICAL_CENTER
			],
			'fill' => [
				'fillType' => Fill::FILL_SOLID,
				'startColor' => ['rgb' => 'ADD8E6'] // Warna biru muda
			],

		]);
		$sheet->getStyle('B6:B9999')->applyFromArray([
			'alignment' => [
				'horizontal' => Alignment::HORIZONTAL_CENTER,
				'vertical' => Alignment::VERTICAL_CENTER
			]
		]);
		$sheet->setAutoFilter('B5:AJ5');

		// Isi data dari database mulai dari B6
		$row = 6;
		$no = 1;
		foreach ($dataSiswa as $siswa) {
			$sheet->setCellValue('B' . $row, $no++);
			if ($siswa->status == '1') {
				$sheet->setCellValue('C' . $row, 'Menunggu Validasi');
				$sheet->getStyle('C' . $row)->applyFromArray([
					'font' => ['color' => ['rgb' => '000000']] // Warna hitam (default)
				]);
			} elseif ($siswa->status == '2') {
				$sheet->setCellValue('C' . $row, 'Terkonfirmasi');
				$sheet->getStyle('C' . $row)->applyFromArray([
					'font' => ['color' => ['rgb' => '008000']] // Warna hijau
				]);
			} elseif ($siswa->status == '3') {
				$sheet->setCellValue('C' . $row, 'Tidak Terkonfirmasi');
				$sheet->getStyle('C' . $row)->applyFromArray([
					'font' => ['color' => ['rgb' => 'FF0000']] // Warna merah
				]);
			}
			$sheet->setCellValue('D' . $row, date('d-m-Y H:i:s', strtotime($siswa->tanggal_formulir)));

			// Ambil nama user berdasarkan id_user dari tabel user
			$nama_user = $this->db->select('nama')
				->where('id_user', $siswa->id_user)
				->get('users')
				->row();

			// Pastikan data ditemukan sebelum memasukkan ke dalam Excel
			if ($nama_user) {
				$sheet->setCellValue('E' . $row, $nama_user->nama);
			} else {
				$sheet->setCellValue('E' . $row, 'Tidak Ditemukan'); // Jika user tidak ditemukan
			}
			$sheet->setCellValue('F' . $row, $siswa->nama);
			$sheet->setCellValue('G' . $row, $siswa->nik);
			$sheet->setCellValue('H' . $row, $siswa->alamat);
			$sheet->setCellValue('I' . $row, $siswa->agama);
			$sheet->setCellValue('J' . $row, $siswa->tanggal_lahir);
			$sheet->setCellValue('K' . $row, $siswa->asal_sekolah);
			$sheet->setCellValue('L' . $row, $siswa->anak_ke);
			$sheet->setCellValue('M' . $row, $siswa->saudara);
			$sheet->setCellValue('N' . $row, $siswa->jenis_kelamin);
			$sheet->setCellValue('O' . $row, $siswa->nama_a);
			$sheet->setCellValue('P' . $row, $siswa->nik_a);
			$sheet->setCellValue('Q' . $row, $siswa->alamat_a);
			$sheet->setCellValue('R' . $row, $siswa->agama_a);
			$sheet->setCellValue('S' . $row, $siswa->tanggal_lahir_a);
			$sheet->setCellValue('T' . $row, $siswa->email_a);
			$sheet->setCellValue('U' . $row, $siswa->profesi_a);
			$sheet->setCellValue('V' . $row, $siswa->no_hp_a);
			$sheet->setCellValue('W' . $row, $siswa->penghasilan_a);
			$sheet->setCellValue('X' . $row, $siswa->nama_b);
			$sheet->setCellValue('Y' . $row, $siswa->nik_b);
			$sheet->setCellValue('Z' . $row, $siswa->alamat_b);
			$sheet->setCellValue('AA' . $row, $siswa->agama_b);
			$sheet->setCellValue('AB' . $row, $siswa->tanggal_lahir_b);
			$sheet->setCellValue('AC' . $row, $siswa->email_b);
			$sheet->setCellValue('AD' . $row, $siswa->profesi_b);
			$sheet->setCellValue('AE' . $row, $siswa->no_hp_b);
			$sheet->setCellValue('AF' . $row, $siswa->penghasilan_b);
			$base_url = base_url('uploads/');
			$sheet->setCellValue('AG' . $row, 'Klik Untuk Download Foto');
			$sheet->getCell('AG' . $row)->getHyperlink()->setUrl($base_url . $siswa->foto);
			$sheet->setCellValue('AH' . $row, 'Klik Untuk Download KK');
			$sheet->getCell('AH' . $row)->getHyperlink()->setUrl($base_url . $siswa->dokumen_kk);
			$sheet->setCellValue('AI' . $row, 'Klik Untuk Download Akta');
			$sheet->getCell('AI' . $row)->getHyperlink()->setUrl($base_url . $siswa->dokumen_akta);

			$sheet->setCellValue('AJ' . $row, $siswa->id_formulir);

			$row++;
		}

		$customWidths = [
			'B' => 8,
			'C' => 20,
			'D' => 19,
			'E' => 19,
			'F' => 25,
			'G' => 20,
			'H' => 25,
			'I' => 10,
			'J' => 15,
			'K' => 20,
			'L' => 10,
			'M' => 10,
			'N' => 15,
			'O' => 20,
			'P' => 20,
			'Q' => 20,
			'R' => 15,
			'S' => 20,
			'T' => 20,
			'U' => 15,
			'V' => 20,
			'W' => 20,
			'X' => 20,
			'Y' => 15,
			'Z' => 20,
			'AA' => 15,
			'AB' => 20,
			'AC' => 20,
			'AD' => 15,
			'AE' => 20,
			'AF' => 20,
			'AG' => 20,
			'AH' => 20,
			'AI' => 20,
			'AJ' => 10,

		];

		foreach ($customWidths as $col => $width) {
			$sheet->getColumnDimension($col)->setWidth($width);
		}

		// Tambahkan border untuk semua data
		$dataRange = 'B5:AJ' . ($row - 1);
		$sheet->getStyle($dataRange)->applyFromArray([
			'borders' => [
				'allBorders' => [
					'borderStyle' => Border::BORDER_THIN,
					'color' => ['rgb' => '000000']
				]
			]
		]);

		// Set nama file
		$filename = 'Data_siswa_' . $fileName . '.xlsx';

		// Set header agar bisa di-download sebagai file Excel
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="' . $filename . '"');
		header('Cache-Control: max-age=0');

		// Buat file Excel dan unduh
		$writer = new Xlsx($spreadsheet);
		$writer->save('php://output');
		exit;
	}
	public function user()
	{
		$id_user =  $this->session->userdata('id_user');
		$data["user"] = $this->Auth_Model->getById($id_user);
		$this->load->view('admin/user', $data);
	}
	public function user_edit($id_user = null)
	{
		$user = $this->Auth_Model;
		$validation = $this->form_validation;
		$validation->set_rules($user->rules());

		if ($validation->run()) {
			$user->update();
			$this->session->set_flashdata('success', 'Data Berhasil Diubah!');
			redirect('Home/user');
		}

		$data["user"] = $user->getById($id_user);
		if (!$data["user"]) {
			redirect('404_override'); // Ganti 'kategori' dengan nama controller yang ingin Anda tuju
		}
	}
}
