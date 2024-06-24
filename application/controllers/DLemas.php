<?php
//Nama:Teuku Vaickal 15220658 15.4C.05
class DLemas extends CI_Controller
{
    public function index()
    {
        $this->load->helper('form');
        $this->load->view('dlemas/input_siswa');
    }

    public function hasil()
    {
        $data['nama'] = $this->input->post('nama');
        $data['nis'] = $this->input->post('nis');
        $data['kelas'] = $this->input->post('kelas');
        $data['tgl'] = $this->input->post('tgl');
        $data['tpl'] = $this->input->post('tpl');
        $data['alamat'] = $this->input->post('alamat');
        $data['gender'] = $this->input->post('gender');
        $data['agama'] = $this->input->post('agama');

        $this->load->view('dlemas/hasil_siswa', $data);
    }
}
