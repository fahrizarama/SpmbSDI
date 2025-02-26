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
		$data["siswa"] = $this->Siswa_Model->getSiswaID();
		if (!$data["siswa"]) {
			$this->session->set_flashdata('tanya', 'Anda Belum Mengajukan Pendaftaran');
			$this->load->view('dashboard', $data);
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

	public function cetak_pdf($id_formulir = null)
	{
		$siswa = $this->Siswa_Model->getById($id_formulir);
		if (!$siswa) {
			show_error("Data siswa tidak ditemukan!", 404);
		}

		$mpdf = new \Mpdf\Mpdf([
			'format' => 'A4',
			'margin_left' => 0,
			'margin_right' => 0,
			'margin_top' => 0,
			'margin_bottom' => 15,
			'margin_header' => 0,
			'margin_footer' => 5
		]);

		// Load tampilan print_siswa.php sebagai HTML
		$data["siswa"] = $siswa;
		$html = $this->load->view('detail_formPDF', $data, true);

		// Tambahkan HTML ke PDF
		$mpdf->WriteHTML($html);

		// Tambahkan Footer
		$mpdf->SetHTMLFooter('
        <div style="text-align: center; font-size: 10px; position: fixed; bottom: -2px; width: 100%;">
            - ' . ($siswa->nama ?? "Tidak Ada Nama") . ' -
        </div>
    ');

		// Path ke dokumen KK dan Akta
		$file_kk = FCPATH . 'uploads/' . $siswa->dokumen_kk;
		$file_akta = FCPATH . 'uploads/' . $siswa->dokumen_akta;

		// Gabungkan PDF KK jika file ada
		if (file_exists($file_kk)) {
			$mpdf->AddPage();
			$pagecount = $mpdf->SetSourceFile($file_kk);
			for ($i = 1; $i <= $pagecount; $i++) {
				$tplId = $mpdf->ImportPage($i);
				$mpdf->UseTemplate($tplId);
				if ($i < $pagecount) {
					$mpdf->AddPage();
				}
			}
		}

		// Gabungkan PDF Akta jika file ada
		if (file_exists($file_akta)) {
			$mpdf->AddPage();
			$pagecount = $mpdf->SetSourceFile($file_akta);
			for ($i = 1; $i <= $pagecount; $i++) {
				$tplId = $mpdf->ImportPage($i);
				$mpdf->UseTemplate($tplId);
				if ($i < $pagecount) {
					$mpdf->AddPage();
				}
			}
		}

		// Simpan dengan nama file sesuai ID Formulir
		$mpdf->Output('Data_Siswa_' . $id_formulir . '.pdf', 'D'); // 'D' = Download, 'I' = Open in Browser
	}



	//download formulir saja. tanpa kk dan akta
	// 	public function cetak_pdf($id_formulir = null) 
	// 	{
	// 		$siswa = $this->Siswa_Model;
	// 		$data["siswa"] = $siswa->getById($id_formulir);


	// 		$mpdf = new \Mpdf\Mpdf([
	// 			'format' => 'A4', // Ukuran kertas A4
	// 			'margin_left' => 0, // Margin kiri 10mm
	// 			'margin_right' => 0, // Margin kanan 10mm
	// 			'margin_top' => 0, // Margin atas 15mm
	// 			'margin_bottom' => 15, // Margin bawah 15mm
	// 			'margin_header' => 0, // Margin header 5mm
	// 			'margin_footer' => 5 // Margin footer 5mm
	// 		]);

	// 		// Load tampilan print_siswa.php sebagai HTML
	// 		$html = $this->load->view('detail_formPDF', $data, true);


	// 		$mpdf->SetHTMLFooter('
	//     <div style="text-align: center; font-size: 10px; position: fixed; bottom: -2px; width: 100%;">
	//         - ' . $data["siswa"]->nama . ' -
	//     </div>
	// ');

	// 		// Set HTML ke MPDF dan buat PDF
	// 		$mpdf->WriteHTML($html);
	// 		$mpdf->Output('Data_Siswa_' . $id_formulir . '.pdf', 'D'); // 'D' = Download, 'I' = Open in Browser


	// 	}


}
