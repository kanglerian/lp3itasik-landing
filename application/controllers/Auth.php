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

	public function profile()
	{
		$logged = $this->session->userdata('logged');
		if ($logged == NULL) {
			$this->session->set_flashdata('message', ['message' => 'Harap login terlebih dahulu!']);
			redirect('auth');
		} else {
			$this->load->view('templates/header_dashboard');
			$this->load->view('pages/auth/profile');
			$this->load->view('templates/footer_dashboard');
		}
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
				$this->session->set_userdata('uuid', $data[0]->uuid);
				$this->session->set_userdata('fullname', $data[0]->fullname);
				$this->session->set_userdata('username', $data[0]->username);
				$this->session->set_userdata('role', $data[0]->role);
				$this->session->set_userdata('logged', TRUE);
				return redirect('auth/profile');
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
