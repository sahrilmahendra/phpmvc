<?php

class About
{
    public function index($nama = "Sahril", $asal = "Sidoarjo")
    {
        echo "Halo, nama saya $nama.. Saya dari $asal";
    }

    public function page()
    {
        echo "About/page";
    }
}
