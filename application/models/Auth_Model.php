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

    public function getById($id_user)
    {
        return $this->db->get_where($this->_table, ['id_user' => $id_user])->row();
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
        $this->nama = $post["nama"];
        $this->email = $post["email"];
        $this->username = $post["username"];
        $this->view_password = $post["view_password"];
        $this->role = $post["role"];
        if (!$post["password"]) {
            $this->password = $post["oldPassword"];
            $this->view_password = $post["old_view_password"];
        } else {
            $this->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $this->view_password = $post["password2"];
        }


        // Update data admin ke dalam database
        $this->db->update($this->_table, $this, array('id_user' => $post['id_user']));
    }
}
