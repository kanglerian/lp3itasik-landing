<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Company extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Company_model');
	}

	public function index()
	{
		$logged = $this->session->userdata('logged');
		if ($logged == NULL) {
			$this->session->set_flashdata('message', ['message' => 'Harap login terlebih dahulu!']);
			redirect('auth');
		} else {
			$data['companies'] = $this->Company_model->get_all_records();
			$this->load->view('templates/header_dashboard', $data);
			$this->load->view('pages/dashboard/company', $data);
			$this->load->view('templates/footer_dashboard');
		}
	}

	public function insert()
	{
		$logged = $this->session->userdata('logged');
		if ($logged == NULL) {
			$this->session->set_flashdata('message', ['message' => 'Harap login terlebih dahulu!']);
			redirect('auth');
		} else {
			$data['companies'] = $this->Company_model->get_all_records();
			$this->Company_model->insert_record();
			redirect('company');
		}
	}


	public function update()
	{
		$logged = $this->session->userdata('logged');
		if ($logged == NULL) {
			$this->session->set_flashdata('message', ['message' => 'Harap login terlebih dahulu!']);
			redirect('auth');
		} else {
			$id = $this->uri->segment(3);
			$this->Company_model->update_record($id);
			redirect('company');
		}
	}

	public function change()
	{
		$logged = $this->session->userdata('logged');
		if ($logged == NULL) {
			$this->session->set_flashdata('message', ['message' => 'Harap login terlebih dahulu!']);
			redirect('auth');
		} else {
			$id = $this->uri->segment(3);
			$this->Company_model->change_status_record($id);
			redirect('company');
		}
	}

	public function delete()
	{
		$logged = $this->session->userdata('logged');
		if ($logged == NULL) {
			$this->session->set_flashdata('message', ['message' => 'Harap login terlebih dahulu!']);
			redirect('auth');
		} else {
			$id = $this->uri->segment(3);
			$this->Company_model->delete_record($id);
			redirect('company');
		}
	}
}
