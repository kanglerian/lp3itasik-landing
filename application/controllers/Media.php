<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Media extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Media_model');
	}

	public function index()
	{
		$logged = $this->session->userdata('logged');
		if ($logged == NULL) {
			$this->session->set_flashdata('message', ['message' => 'Harap login terlebih dahulu!']);
			redirect('auth');
		} else {
			$data['medias'] = $this->Media_model->get_all_records();
			$this->load->view('templates/header_dashboard', $data);
			$this->load->view('pages/dashboard/media', $data);
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
			$data['medias'] = $this->Media_model->get_all_records();
			$this->Media_model->insert_record();
			redirect('media');
		}
	}

	public function media_add()
	{
		$logged = $this->session->userdata('logged');
		if ($logged == NULL) {
			$this->session->set_flashdata('message', ['message' => 'Harap login terlebih dahulu!']);
			redirect('auth');
		} else {
			$this->load->view('templates/header_dashboard');
			$this->load->view('pages/dashboard/media_add');
			$this->load->view('templates/footer_dashboard');
		}
	}

	public function detail($uuid)
	{
		$logged = $this->session->userdata('logged');
		if ($logged == NULL) {
			$this->session->set_flashdata('message', ['message' => 'Harap login terlebih dahulu!']);
			redirect('auth');
		} else {
			$data['media'] = $this->Media_model->get_record($uuid);
			$this->load->view('templates/header_dashboard');
			$this->load->view('pages/dashboard/media_detail', $data);
			$this->load->view('templates/footer_dashboard');
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
			$this->Media_model->update_record($id);
			redirect('media');
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
			$this->Media_model->change_status_record($id);
			redirect('media');
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
			$this->Media_model->delete_record($id);
			redirect('media');
		}
	}
}
