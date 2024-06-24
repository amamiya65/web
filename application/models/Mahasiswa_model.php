<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

    public function simpan_data_mahasiswa($data) {
        return $this->db->insert('data_mahasiswa', $data);
    }

}
?>
