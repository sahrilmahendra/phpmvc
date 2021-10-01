<?php

class About extends Controller
{
    public function index($nama = "Sahril", $asal = "Sidoarjo", $umur = 24)
    {
        $data['nama'] = $nama;
        $data['asal'] = $asal;
        $data['umur'] = $umur;
        $data['judul'] = "About Me";
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['judul'] = "Pages";
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
