<?php

namespace App\Admin;

class Dosen extends Pegawai
{
    public string $nidn;

    public function mengajar(): void
    {
        echo "{$this->nama} sedang mengajar perkuliahan";
    }

    public function getNidn(): string
    {
        return $this->nidn;
    }

    public function setNidn(string $nidn): void
    {
        $this->nidn = $nidn;
    }
}