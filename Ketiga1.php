<?php

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari)
    {
        $this->jari_jari = $jari_jari;
    }

    public function luas() : float {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling() : float {
        return 2 * self::PHI * $this->jari_jari;
    }
}

class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari)
    {
        $this->jari_jari = $jari_jari;
    }

    public function volume() : float {
        return (4/3) * self::PHI * pow($this->jari_jari, 3);
    }
}

class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi)
    {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi)
    {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return (1/3) * self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

// 1. Membuat object nasi_tumpeng (Kerucut)
$nasi_tumpeng = new Kerucut(4, 10);
echo "Volume nasi tumpeng: " . number_format($nasi_tumpeng->volume(), 2) . " cm³\n";

// 2. Membuat object dari class Lingkaran
$lingkaran = new Lingkaran(5);
echo "Luas lingkaran: " . number_format($lingkaran->luas(), 2) . " cm²\n";
echo "Keliling lingkaran: " . number_format($lingkaran->keliling(), 2) . " cm\n";

// 3. Implementasi untuk Bola
$bola = new Bola(3);
echo "Volume bola: " . number_format($bola->volume(), 2) . " cm³\n";

// 3. Implementasi untuk Tabung
$tabung = new Tabung(4, 8);
echo "Volume tabung: " . number_format($tabung->volume(), 2) . " cm³\n";

// 3. Implementasi untuk Kerucut (sudah ada di poin 1, tapi ditambahkan lagi untuk kelengkapan)
$kerucut = new Kerucut(3, 7);
echo "Volume kerucut: " . number_format($kerucut->volume(), 2) . " cm³\n";