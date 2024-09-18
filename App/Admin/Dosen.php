<?php

namespace App\Admin;

class Dosen extends Pegawai
{
    private string $nidn;

    public function mengajar(): void
    {
        echo "{$this->getNama()} sedang mengajar perkuliahan";
    }

    public function setNidn(string $nidn): void
    {
        $this->nidn = $nidn;
    }

    public function getNidn(): string
    {
        return $this->nidn;
    }
}