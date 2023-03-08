<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Article_model');
	}

	public function index()
	{
		$logged = $this->session->userdata('logged');
		$uuid = $this->session->userdata('uuid');
		$role = $this->session->userdata('role');
		if ($logged == NULL) {
			$this->session->set_flashdata('message', ['message' => 'Harap login terlebih dahulu!']);
			redirect('auth');
		} else {
			if($role == 'admin'){
				$data['articles'] = $this->Article_model->get_all_records();
			}else{
				$data['articles'] = $this->Article_model->get_all_records_user($uuid);
			};
			$this->load->view('templates/header_dashboard', $data);
			$this->load->view('pages/dashboard/article', $data);
			$this->load->view('templates/footer_dashboard');
		}
	}

	public function article_add()
	{
		$logged = $this->session->userdata('logged');
		if ($logged == NULL) {
			$this->session->set_flashdata('message', ['message' => 'Harap login terlebih dahulu!']);
			redirect('auth');
		} else {
			$this->load->view('templates/header');
			$this->load->view('pages/dashboard/article_add');
			$this->load->view('templates/footer');
		}
	}

	public function detail($uuid)
	{
		$logged = $this->session->userdata('logged');
		if ($logged == NULL) {
			$this->session->set_flashdata('message', ['message' => 'Harap login terlebih dahulu!']);
			redirect('auth');
		} else {
			$data['article'] = $this->Article_model->get_record($uuid);
			$this->load->view('templates/header');
			$this->load->view('pages/dashboard/article_detail', $data);
			$this->load->view('templates/footer');
		}
	}

	public function insert()
	{
		$logged = $this->session->userdata('logged');
		if ($logged == NULL) {
			$this->session->set_flashdata('message', ['message' => 'Harap login terlebih dahulu!']);
			redirect('auth');
		} else {
			$data['articles'] = $this->Article_model->get_all_records();
			$this->Article_model->insert_record();
			redirect('article');
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
			$this->Article_model->update_record($id);
			redirect('article');
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
			$this->Article_model->change_status_record($id);
			redirect('article');
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
			$this->Article_model->delete_record($id);
			redirect('article');
		}
	}
}
