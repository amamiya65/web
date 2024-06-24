<?php
class ModelDLemas extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_entries() {
        $query = $this->db->get('dlemas');
        return $query->result();
    }

    public function insert_entry($data) {
        $this->db->insert('dlemas', $data);
    }

}