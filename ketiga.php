<?php

class Lingkaran
{
    const PHI = 3.14;

    public function luas($jari_jari) : float {
        return self::PHI*$jari_jari*$jari_jari;
    }

    public function keliling($jari_jari) : float {
        return 2*self::PHI*$jari_jari;
    }
}

class Bola
{
    const PHI = 3.14;
    public function volume($jari_jari) : float {
        return (4/3)*self::PHI*pow($jari_jari,3);
    }
}

class Tabung
{
    const PHI = 3.14;
    public function volume($jari_jari,$tinggi) : float {
        return self::PHI*pow($jari_jari,2)*$tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;
    public function volume($jari_jari,$tinggi) : float {
        return (1/3)*self::PHI*pow($jari_jari,2)*$tinggi;
    }
}

// Membuat objek nasi_tumpeng dari class Kerucut
$nasi_tumpeng = new Kerucut();

// Menghitung volume nasi_tumpeng
$jari_jari = 4; // cm
$tinggi = 10; // cm
$volume = $nasi_tumpeng->volume($jari_jari, $tinggi);

// Menampilkan hasil
echo "Volume nasi tumpeng dengan jari-jari {$jari_jari} cm dan tinggi {$tinggi} cm adalah: " . number_format($volume, 2) . " cm³";