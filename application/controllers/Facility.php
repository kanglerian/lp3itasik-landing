<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Facility extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Facility_model');
	}

	public function index()
	{
		$logged = $this->session->userdata('logged');
		if ($logged == NULL) {
			$this->session->set_flashdata('message', ['message' => 'Harap login terlebih dahulu!']);
			redirect('auth');
		} else {
			$data['facilities'] = $this->Facility_model->get_all_records();
			$this->load->view('templates/header_dashboard', $data);
			$this->load->view('pages/dashboard/facility', $data);
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
			$data['facilities'] = $this->Facility_model->get_all_records();
			$this->Facility_model->insert_record();
			redirect('facility');
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
			$this->Facility_model->update_record($id);
			redirect('facility');
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
			$this->Facility_model->change_status_record($id);
			redirect('facility');
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
			$this->Facility_model->delete_record($id);
			redirect('facility');
		}
	}
}
