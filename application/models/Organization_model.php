<?php
class Organization_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_records()
    {
        $query = $this->db->get('organizations');
        return $query->result();
    }

    public function get_active_records()
    {
        $query = $this->db->get_where('organizations', ['status' => 1]);
        return $query->result();
    }

    public function insert_record()
    {
        $data = [
            'title' => $this->input->post('title'),
            'drawio' => $this->input->post('drawio'),
            'status' => $this->input->post('status'),
        ];
        $message = [
            'status' => 'success',
            'message' => 'Data berhasil ditambahkan!'
        ];
        $this->session->set_flashdata('message', $message);
        return $this->db->insert('organizations', $data);
    }

    public function update_record($id)
    {
        $data = [
            'title' => $this->input->post('title'),
            'drawio' => $this->input->post('drawio'),
            'status' => $this->input->post('status'),
        ];
        $message = [
            'status' => 'success',
            'message' => 'Data berhasil diubah!'
        ];
        $this->session->set_flashdata('message', $message);
        return $this->db->update('organizations', $data, ["id" => $id]);
    }

    public function change_status_record($id)
    {
        $record = $this->db->get_where('organizations', ['id' => $id])->row();
        $data = [
            "status" => $record->status == "0" ? "1" : "0"
        ];
        $message = [
            'status' => 'success',
            'message' => 'Data berhasil diubah!'
        ];
        $this->session->set_flashdata('message', $message);
        return $this->db->update('organizations', $data, ["id" => $id]);
    }

    public function delete_record($id)
    {
        $this->db->where('id', $id);
        $message = [
            'status' => 'success',
            'message' => 'Data berhasil dihapus!'
        ];
        $this->session->set_flashdata('message', $message);
        return $this->db->delete('organizations');
    }
}
