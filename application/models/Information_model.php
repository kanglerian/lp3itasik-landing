<?php
class Information_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_records()
    {
        $query = $this->db->get('information');
        return $query->result();
    }

    public function get_one_record()
    {
        $query = $this->db->get_where('information', ['status' => 1], 1);
        return $query->result();
    }

    public function insert_record()
    {
        $data = [
            'title' => $this->input->post('title'),
            'youtube' => $this->input->post('youtube'),
            'description' => $this->input->post('description'),
        ];
        $message = [
            'status' => 'success',
            'message' => 'Data berhasil ditambahkan!'
        ];
        $this->session->set_flashdata('message', $message);
        return $this->db->insert('information', $data);
    }

    public function update_record($id)
    {
        $data = [
            'title' => $this->input->post('title'),
            'youtube' => $this->input->post('youtube'),
            'description' => $this->input->post('description'),
        ];
        $message = [
            'status' => 'success',
            'message' => 'Data berhasil diubah!'
        ];
        $this->session->set_flashdata('message', $message);
        return $this->db->update('information', $data, ["id" => $id]);
    }

    public function change_status_record($id)
    {
        $record = $this->db->get_where('information', ['id' => $id])->row();
        $data = [
            "title" => $record->title,
            "description" => $record->description,
            "youtube" => $record->youtube,
            "status" => $record->status == "0" ? "1" : "0",
        ];
        $non = [
            "status" => "0"
        ];
        $message = [
            'status' => 'success',
            'message' => 'Data berhasil diubah!'
        ];
        $this->session->set_flashdata('message', $message);
        $this->db->update('information', $non, ["status" => "1"]);
        return $this->db->update('information', $data, ["id" => $id]);
    }

    public function delete_record($id)
    {
        $this->db->where('id', $id);
        $message = [
            'status' => 'success',
            'message' => 'Data berhasil dihapus!'
        ];
        $this->session->set_flashdata('message', $message);
        return $this->db->delete('information');
    }
}
