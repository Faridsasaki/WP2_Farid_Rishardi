<?php

class Tokosepatu extends CI_Controller
{

    public function index()
    {
        
        $this->load->view('Inputsepatu');
    }

    public function cetak()
    {
$this->form_validation->set_rules('nama', 'Name Pembeli', 'required_length[3]',
array(
            'required' => 'Harus disi,',
            'min_length' => 'minimal 3 karakter')
        );
        $this->form_validation->set_rules('nohp', 'No Hp',required',
        array(
            'required' =>"Harus diisi.')
        $this->form_validation->set_rules('merk', 'Merk Sepatu',required',
        array(
            'required' =>"Harus diisi.')
        $this->form_validation->set_rules('ukuran', 'Ukuran Sepatu',required',
        array(
            'required' =>"Harus diisi.')
        );
if ($this->form_validation->run{} == FALSE)
{
    $this->load->view('Inputsepatu');
}else{
    $data = [
        "nama" => $this->input->post("nama"),
        "nohp" => $this->input->post("nohp"),
        "merk" => $this->input->post("merk"),
        "harga" => $this->input->post("harga"),
    ];
    if ($this->input->post('merk') == "Adidas"]{
        $data['harga'] = 1500000;
    }elseif($this->input->post('merk') =="Nike"]{
        $data['harga'] = 3500000;
    }elseif($this->input->post('merk') =="Kickers"]{
        $data['harga'] = 2500000;
    }elseif($this->input->post('merk') =="Hush Pupies"]{
        $data['harga'] = 3000000;
    }elseif($this->input->post('merk') =="Onitsuka Tiger"]{
        $data['harga'] = 5000000;
    }else(
        $data['harga'] = 5000000;
    }
    $this->load->view('Outpputsepatu', $data);
        }
    }
}