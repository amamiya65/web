<?php 

class data extends CI_Model {
	function addmahasiswa($data) {

	  $this->db->insert('data_mahasiswa', $data);
	  
	}
}
?>
