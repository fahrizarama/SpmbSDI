<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth_Model extends CI_Model
{
    private $_table = "users";

    public $id_user;
    public $nama;
    public $email;
    public $username;
    public $password;
    public $view_password;
    public $role;

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

    public function save()
    {

        $post = $this->input->post();
        $this->nama = $post["nama"];
        $this->email = $post["email"];
        $this->username = $post["username"];
        $this->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $this->view_password = $post["password"];
        $this->role = 2;

        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_anggota = $post["id_anggota"];
        $this->nama = $post["nama"];
        $this->nim = $post["nim"];
        $this->alasan = $post["alasan"];
        $this->angkatan = $post["angkatan"];
        $this->jabatan = $post["jabatan"];
        $this->token = '1';

        // Update data anggota ke dalam database
        $this->db->update($this->_table, $this, array('id_anggota' => $post['id_anggota']));
    }
}
