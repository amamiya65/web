<?php
defined('BASEPATH') or exit('No direct script access allowed');

class panggil extends CI_Controller
{
	

	
	public function index()
	{
		$this->load->model('data');
		$this->load->view('input' );
		$data['nama'] = $this->input->post('nama');
		$data['nis'] = $this->input->post('nis');
		$data['kelas'] = $this->input->post('kelas');
		$data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
        $data['tempat_lahir'] = $this->input->post('tempat_lahir');
        $data['alamat'] = $this->input->post('alamat');
        $data['gender'] = $this->input->post('gender');
        $data['agama'] = $this->input->post('agama');
		$this->data->addmahasiswa($data);

	}	
}
?>
