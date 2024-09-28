<?php

class Penulis {
    public $nama;
    public $deskripsi;

    public function __construct($nama, $deskripsi) {
        $this->nama = $nama;
        $this->deskripsi = $deskripsi;
    }

    public function tampilkan($tipe) {
        if ($tipe === 'nama') {
            return $this->nama;
        } elseif ($tipe === 'deskripsi') {
            return $this->deskripsi;
        }
        return [];
    }
}
