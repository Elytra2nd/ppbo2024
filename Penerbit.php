<?php

class Penerbit {
    public $nama;
    public $alamat;
    private $telepon;

    public function __construct($nama, $alamat, $telepon) {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->telepon = $telepon;
    }

    public function setTelepon($telepon) {
        $this->telepon = $telepon;
    }

    public function getTelepon() {
        return $this->telepon;
    }
}
