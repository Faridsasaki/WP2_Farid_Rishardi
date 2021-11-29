<?php 
class Latihan1 extends CI_Controller
{
  public function index()
  {
    echo "Selamat Datang.. Selamat belajar Web Programming";
    //$this->load->view('view-latihan1');
  }
  public function penjumlahan($n1, $n2)
  {
    $this->load->model('Model_Latihan');
    $hasil = $this->Model_Latihan->jumlah($n1, $n2);
    echo "Hasil Penjumlahan dari". $n1 ." + ". $n2 ." = " .$hasil;
  }
}