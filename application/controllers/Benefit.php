<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Benefit extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Benefit_model');
	}

	public function index()
	{
		$logged = $this->session->userdata('logged');
		if ($logged == NULL) {
			$this->session->set_flashdata('message', ['message' => 'Harap login terlebih dahulu!']);
			redirect('auth');
		} else {
			$data['benefits'] = $this->Benefit_model->get_all_records();
			$this->load->view('templates/header_dashboard', $data);
			$this->load->view('pages/dashboard/benefit', $data);
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
			$data['benefits'] = $this->Benefit_model->get_all_records();
			$this->Benefit_model->insert_record();
			redirect('benefit');
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
			$this->Benefit_model->update_record($id);
			redirect('benefit');
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
			$this->Benefit_model->change_status_record($id);
			redirect('benefit');
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
			$this->Benefit_model->delete_record($id);
			redirect('benefit');
		}
	}
}
