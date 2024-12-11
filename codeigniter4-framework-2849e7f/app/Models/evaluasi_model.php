<?php
class Evaluation_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function save_evaluation($data)
    {
        return $this->db->insert('evaluasi', $data);
    }
}
