<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Program extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Program_model');
		$this->load->model('ProgramDesc_model');
	}

	public function index()
	{
		$logged = $this->session->userdata('logged');
		if ($logged == NULL) {
			$this->session->set_flashdata('message', ['message' => 'Harap login terlebih dahulu!']);
			redirect('auth');
		} else {
			$data['programs'] = $this->Program_model->get_all_records();
			$this->load->view('templates/header_dashboard', $data);
			$this->load->view('pages/dashboard/program', $data);
			$this->load->view('templates/footer_dashboard');
		}
	}

	public function show($id)
	{
		$logged = $this->session->userdata('logged');
		if ($logged == NULL) {
			$this->session->set_flashdata('message', ['message' => 'Harap login terlebih dahulu!']);
			redirect('auth');
		} else {
			$data['program'] = $this->Program_model->get_record($id);
			$data['visis'] = $this->ProgramDesc_model->get_desc_record($id,'visi');
			$data['misis'] = $this->ProgramDesc_model->get_desc_record($id,'misi');
			$data['keunggulans'] = $this->ProgramDesc_model->get_desc_record($id,'keunggulan');
			if ($data['program'] != NULL) {
				$this->load->view('templates/header');
				$this->load->view('pages/dashboard/program_detail', $data);
				$this->load->view('templates/footer');
			}else{
				return redirect('program');
			}
		}
	}

	public function insert()
	{
		$logged = $this->session->userdata('logged');
		if ($logged == NULL) {
			$this->session->set_flashdata('message', ['message' => 'Harap login terlebih dahulu!']);
			redirect('auth');
		} else {
			$data['programs'] = $this->Program_model->get_all_records();
			$this->Program_model->insert_record();
			redirect('program');
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
			$this->Program_model->update_record($id);
			redirect('program');
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
			$this->Program_model->change_status_record($id);
			redirect('program');
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
			$this->Program_model->delete_record($id);
			redirect('program');
		}
	}
}
