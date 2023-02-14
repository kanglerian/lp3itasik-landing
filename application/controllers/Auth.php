<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
	}

	public function index()
	{
		$this->load->view('templates/header_auth');
		$this->load->view('pages/auth/login');
		$this->load->view('templates/footer_auth');
	}

	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if (empty($username) || empty($password)) {
			$this->session->set_flashdata('message', ['message' => 'Username atau Password kosong!']);
		} else {
			$data = $this->Auth_model->get_account($username);
			if ($password != $data[0]->password) {
				$this->session->set_flashdata('message', ['message' => 'Password salah!']);
			} else {
				$this->session->set_userdata('username', $username);
				$this->session->set_userdata('logged', TRUE);
				return redirect('banner');
			}
		}
		return redirect('auth');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		return redirect('auth');
	}
}
