<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "selmat datang.. selmat belajar web proramming";
    }
    public function penjumlahan($n1, $n2)
 {
 $this->load->model('Model_latihan1');
 $hasil = $this->model_latihan1->jumlah($n1, $n2);
 echo "Hasil Penjumlahan dari". $n1 ." + ". $n2 ." = "
.$hasil;
 }
}