<?php defined('BASEPATH') or exit('No direct script access allowed');

class Api_Model extends CI_Model
{
    private $_table = "api";

    public $id_api;
    public $api_key;
    public $api_token;
    public $cache;
    public function rules()
    {
        return [

            [
                'field' => 'api_token',
                'label' => 'api_token',
                'rules' => 'required'
            ],

        ];
    }


    public function getById($id_api)
    {
        return $this->db->get_where($this->_table, ['id_api' => $id_api])->row();
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->row();
    }


    public function update()
    {
        $post = $this->input->post();
        $this->id_api = $post["id_api"];
        $this->api_token = $post["api_token"];
        $this->db->update($this->_table, $this, array('id_api' => $post['id_api']));
    }
}
