
<?php

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();



		$this->load->model("Auth_Model");
		$this->load->library('form_validation');
	}

	function index()
	{
		$this->load->view("login");
	}

	function auth()
	{
		$username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
		$password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);


		$user = $this->db->get_where('users', ['username' => $username])->row_array();

		if ($user) {
			if (password_verify($password, $user['password'])) {
				$datas = [
					'id_user' => $user['id_user'],
					'nama' => $user['nama'],
					'email' => $user['email'],
					'username' => $user['username'],
					'role' => $user['role']
				];
				$this->session->set_userdata($datas);
				if ($user['role'] == '1') {
					redirect('Home');
				}
				if ($user['role'] == '2') {
					redirect('Dashboard');
				} else {
					$this->session->unset_userdata('id_user');
					$this->session->unset_userdata('nama');
					$this->session->unset_userdata('email');
					$this->session->unset_userdata('username');
					$this->session->unset_userdata('role');

					$this->session->set_flashdata('message', '<div style="color: red;">Username is not registered! </div>');
					redirect('login');
				}
			} else {
				$this->session->set_flashdata('message', '<div style="color: red;">Incorrect Your Username or Password!</div>');
				redirect('login');
			}
		} else {
			$this->session->set_flashdata('message', '<div style="color: red;">Username is not registered!  </div>');
			redirect('login');
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role');

		$this->session->set_flashdata('message', '<div style="color: greenyellow;" role="alert">You have been logout</div>');
		redirect('Login');
	}

	public function error404()
	{
		$this->load->view("error_404");
	}

	public function register()
	{
		$auth = $this->Auth_Model;
		$validation = $this->form_validation;
		$validation->set_rules($auth->rules());

		if ($validation->run()) {
			$auth->save();
			$this->session->set_flashdata('success', 'Berhasil Registrasi');
			redirect('Login');
		}
		$this->load->view('register');
	}
}
