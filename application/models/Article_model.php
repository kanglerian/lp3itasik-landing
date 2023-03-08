<?php
class Article_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('upload');
    }

    public function get_all_records()
    {
        $this->db->order_by('date','DESC');
        $query = $this->db->get('articles');
        return $query->result();
    }

    public function get_all_records_user($uuid)
    {
        $this->db->order_by('date','DESC');
        $query = $this->db->get_where('articles', ['id_user' => $uuid]);
        return $query->result();
    }

    public function get_record($uuid)
    {
        $query = $this->db->get_where('articles', ['uuid' => $uuid]);
        return $query->row();
    }

    public function get_active_records($count = 0)
    {   
        $this->db->order_by('date','DESC');
        $query = $this->db->get_where('articles', ['status' => 1], $count);
        return $query->result();
    }

    public function insert_record()
    {
        $config['upload_path']  = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = date("Ymdhis");
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
            $special_character = ['~','`','!','@','#','$','%','^','&','*','(',')','_','-','+','=','"',':',';','?','>','.','<',',',"'",'{','}','[',']','/'];
            $data = [
                'image' => date("Ymdhis") . $file["file_ext"],
                'uuid' => strtolower(str_replace(" ","-",str_replace($special_character,"",$this->input->post('title')))),
                'title' => $this->input->post('title'),
                'id_user' => $this->input->post('id_user'),
                'date' => $this->input->post('date'),
                'description' => $this->input->post('description'),
                'source' => $this->input->post('source'),
                'status' => '0',
            ];
            $message = [
                'status' => 'success',
                'message' => 'Data berhasil ditambahkan!'
            ];
            $this->session->set_flashdata('message', $message);
            return $this->db->insert('articles', $data);
        }
    }

    public function update_record($id)
    {
        $config['upload_path']  = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = date("Ymdhis");
        $config['max_size'] = 1000;
        $config['overwrite'] = TRUE;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('image')) {
            $file_data = $this->upload->data();
            $special_character = ['~','`','!','@','#','$','%','^','&','*','(',')','_','-','+','=','"',':',';','?','>','.','<',',',"'",'{','}','[',']','/'];
            $data = [
                'image' =>  date("Ymdhis") . $file_data["file_ext"],
                'uuid' => strtolower(str_replace(" ","-",str_replace($special_character,"",$this->input->post('title')))),
                'title' => $this->input->post('title'),
                'date' => $this->input->post('date'),
                'description' => $this->input->post('description'),
                'source' => $this->input->post('source'),
                'status' => $this->input->post('status'),
            ];
            $record = $this->db->get_where('articles', ['id' => $id])->row();
            $file = 'uploads/' . $record->image;
            if (file_exists($file)) {
                unlink($file);
            }
            $message = [
                'status' => 'success',
                'message' => 'Data berhasil diubah!'
            ];
            $this->session->set_flashdata('message', $message);
            return $this->db->update('articles', $data, ['id' =>  $id]);
        } else {
            $special_character = ['~','`','!','@','#','$','%','^','&','*','(',')','_','-','+','=','"',':',';','?','>','.','<',',',"'",'{','}','[',']','/'];
            $data = [
                'title' => $this->input->post('title'),
                'uuid' => strtolower(str_replace(" ","-",str_replace($special_character,"",$this->input->post('title')))),
                'date' => $this->input->post('date'),
                'description' => $this->input->post('description'),
                'source' => $this->input->post('source'),
                'status' => $this->input->post('status'),
            ];
            $message = [
                'status' => 'error',
                'message' => $this->upload->display_errors()
            ];
            $this->session->set_flashdata('message', $message);
            return $this->db->update('articles', $data, ['id' =>  $id]);
        }
    }

    public function change_status_record($id)
    {
        $record = $this->db->get_where('articles', ['id' => $id])->row();
        $data = [
            "status" => $record->status == "0" ? "1" : "0"
        ];
        $message = [
            'status' => 'success',
            'message' => 'Data berhasil diubah!'
        ];
        $this->session->set_flashdata('message', $message);
        return $this->db->update('articles', $data, ["id" => $id]);
    }

    public function delete_record($id)
    {
        $record = $this->db->get_where('articles', ['id' => $id])->row();
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
        return $this->db->delete('articles');
    }
}
