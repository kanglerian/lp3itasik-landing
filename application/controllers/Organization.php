<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Organization extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Organization_model');
	}

	public function index()
	{
		$logged = $this->session->userdata('logged');
		if ($logged == NULL) {
			$this->session->set_flashdata('message', ['message' => 'Harap login terlebih dahulu!']);
			redirect('auth');
		} else {
			$data['organizations'] = $this->Organization_model->get_all_records();
			$this->load->view('templates/header_dashboard', $data);
			$this->load->view('pages/dashboard/organization', $data);
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
			$data['organizations'] = $this->Organization_model->get_all_records();
			$this->Organization_model->insert_record();
			redirect('organization');
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
			$this->Organization_model->update_record($id);
			redirect('organization');
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
			$this->Organization_model->change_status_record($id);
			redirect('organization');
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
			var_dump($id);
			$this->Organization_model->delete_record($id);
			redirect('organization');
		}
	}
}
