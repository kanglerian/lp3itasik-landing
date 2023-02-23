<?php
class Media_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('upload');
    }

    public function get_all_records()
    {
        $query = $this->db->get('medias');
        return $query->result();
    }

    public function get_active_records()
    {   
        $query = $this->db->get_where('medias', ['status' => 1]);
        $query->order_by('date','DESC');
        return $query->result();
    }

    public function insert_record()
    {
        $config['upload_path']  = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = date("Ymdhis");
        $config['max_width'] = 1280;
        $config['min_width'] = 1280;
        $config['max_height'] = 720;
        $config['min_height'] = 720;
        $config['max_size'] = 1000;
        $config['overwrite'] = TRUE;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('image')) {
            $message = [
                'status' => 'error',
                'message' => $this->upload->display_errors()
            ];
            $this->session->set_flashdata('message', $message);
        } else {
            $file = $this->upload->data();
            $data = [
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'date' => $this->input->post('date'),
                'status' => '1',
                'image' => date("Ymdhis") . $file["file_ext"],
            ];
            $message = [
                'status' => 'success',
                'message' => 'Data berhasil ditambahkan!'
            ];
            $this->session->set_flashdata('message', $message);
            return $this->db->insert('medias', $data);
        }
    }

    public function update_record($id)
    {
        $config['upload_path']  = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = date("Ymdhis");
        $config['max_width'] = 1280;
        $config['min_width'] = 1280;
        $config['max_height'] = 720;
        $config['min_height'] = 720;
        $config['max_size'] = 1000;
        $config['overwrite'] = TRUE;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('image')) {
            $file_data = $this->upload->data();
            $data = [
                'image' =>  date("Ymdhis") . $file_data["file_ext"],
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'date' => $this->input->post('date'),
                'status' => $this->input->post('status'),
            ];
            $record = $this->db->get_where('medias', ['id' => $id])->row();
            $file = 'uploads/' . $record->image;
            if (file_exists($file)) {
                unlink($file);
            }
            $message = [
                'status' => 'success',
                'message' => 'Data berhasil diubah!'
            ];
            $this->session->set_flashdata('message', $message);
            return $this->db->update('medias', $data, ['id' =>  $id]);
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'date' => $this->input->post('date'),
                'status' => $this->input->post('status'),
            ];
            $message = [
                'status' => 'error',
                'message' => $this->upload->display_errors()
            ];
            $this->session->set_flashdata('message', $message);
            return $this->db->update('medias', $data, ['id' =>  $id]);
        }
    }

    public function change_status_record($id)
    {
        $record = $this->db->get_where('medias', ['id' => $id])->row();
        $data = [
            "status" => $record->status == "0" ? "1" : "0"
        ];
        $message = [
            'status' => 'success',
            'message' => 'Data berhasil diubah!'
        ];
        $this->session->set_flashdata('message', $message);
        return $this->db->update('medias', $data, ["id" => $id]);
    }

    public function delete_record($id)
    {
        $record = $this->db->get_where('medias', ['id' => $id])->row();
        $file = 'uploads/' . $record->image;
        if (file_exists($file)) {
            unlink($file);
        }
        $this->db->where('id', $id);
        $message = [
            'status' => 'success',
            'message' => 'Data berhasil dihapus!'
        ];
        $this->session->set_flashdata('message', $message);
        return $this->db->delete('medias');
    }
}
