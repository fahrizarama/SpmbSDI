<?php defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_Model extends CI_Model
{
    private $_table = "formulir";

    public $id_formulir;
    public $tanggal_formulir;
    public $id_user;
    public $nama;
    public $nik;
    public $alamat;
    public $agama;
    public $tanggal_lahir;
    public $asal_sekolah;
    public $anak_ke;
    public $saudara;
    public $jenis_kelamin;
    public $nama_a;
    public $nik_a;
    public $alamat_a;
    public $agama_a;
    public $tanggal_lahir_a;
    public $email_a;
    public $profesi_a;
    public $no_hp_a;
    public $penghasilan_a;
    public $nama_b;
    public $nik_b;
    public $alamat_b;
    public $agama_b;
    public $tanggal_lahir_b;
    public $email_b;
    public $profesi_b;
    public $no_hp_b;
    public $penghasilan_b;
    public $foto;
    public $dokumen_kk;
    public $dokumen_akta;
    public $token1;
    public $token2;
    public $token3;
    public $status;


    public function rules()
    {
        return [

            [
                'field' => 'nama',
                'label' => 'nama',
                'rules' => 'required'
            ],

        ];
    }


    public function getRequest() //ambil data untuk dashboard
    {
        $id_user = $this->session->userdata('id_user');
        $query = $this->db->query("SELECT * FROM formulir WHERE id_user = ?", [$id_user]);
        return $query->result();
    }

    public function getById($id_formulir) //detail dashboard
    {
        return $this->db->get_where($this->_table, ['id_formulir' => $id_formulir])->row();
    }

    public function insert_data($data) //save formulir
    {
        return $this->db->insert($this->_table, $data);
    }

    public function update_data($id_formulir, $data)
    {
        $this->db->where('id_formulir', $id_formulir);
        return $this->db->update('formulir', $data);
    }
}
