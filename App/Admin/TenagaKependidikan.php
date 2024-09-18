<?php

namespace App\Admin;

class TenagaKependidikan extends Pegawai
{
    private int $gaji_pokok;

    public function cuti(): void
    {
        echo "Tenaga Kependidikan sedang cuti";
    }

    public function getGajiPokok(): int
    {
        return $this->gaji_pokok;
    }

    public function setGajiPokok(int $gaji_pokok): void
    {
        $this->gaji_pokok = $gaji_pokok;
    }
}