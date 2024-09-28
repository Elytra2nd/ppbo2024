<?php

namespace App\Admin;

class Pegawai
{
    public int $nip;
    public string $nama;
    protected int $no_hp;
    public string $alamat;

    public function setNama(string $nama): void
    {
        $this->nama = $nama;
    }

    public function getNama(): string
    {
        return $this->nama;
    }

    public function setNip(int $nip): void
    {
        $this->nip = $nip;
    }

    public function setNoHp(int $no_hp): void
    {
        $this->no_hp = $no_hp;
    }

    public function getNoHp(): int
    {
        return $this->no_hp;
    }

    public function setAlamat(string $alamat): void
    {
        $this->alamat = $alamat;
    }


}