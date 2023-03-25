<?php
class ProgramDesc_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('upload');
    }

    public function get_desc_record($id,$misi)
    {
        $query = $this->db->get_where('program_desc', ['id_program' => $id,'type' => $misi]);
        return $query->result();
    }

    public function get_career_record($id)
    {
        $query = $this->db->get_where('program_career', ['id_program' => $id]);
        return $query->result();
    }

    public function get_alumni_record($id)
    {
        $query = $this->db->get_where('program_alumni', ['id_program' => $id]);
        return $query->result();
    }

}
