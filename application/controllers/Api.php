<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('Login');
        }


        $this->load->model("Api_Model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["api"] = $this->Api_Model->getAll();
        $this->load->view('admin/api', $data);
    }


    public function edit($id_api = null)
    {

        $api = $this->Api_Model;
        $validation = $this->form_validation;
        $validation->set_rules($api->rules());

        if ($validation->run()) {
            $api->update();
            $this->session->set_flashdata('success', 'Data Berhasil Diubah!');
            redirect('Api');
        }

        $data["api"] = $api->getById($id_api);
        if (!$data["api"]) {
            redirect('404_override'); // Ganti 'kategori' dengan nama controller yang ingin Anda tuju
        }
    }
}
