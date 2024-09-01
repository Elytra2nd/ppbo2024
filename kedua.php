<?php

function luasLingkaran($jari) : float {
    $luas = 3.14*$jari*$jari;
    return $luas;
}

function volumeBola($jari) : float {
    $volume = (4/3) * 3.14 * pow($jari, 3);
    return $volume;
}

// Fungsi untuk menghitung volume tabung
function volumeTabung($jari, $tinggi) : float {
    $volume = 3.14 * pow($jari, 2) * $tinggi;
    return $volume;
}

// Fungsi untuk menghitung volume kerucut
function volumeKerucut($jari, $tinggi) : float {
    $volume = (1/3) * 3.14 * pow($jari, 2) * $tinggi;
    return $volume;
}

$luas_tanah = luasLingkaran(45);
$jari_bola = 3;
$jari_tabung = 4;
$tinggi_tabung = 10;
$jari_kerucut = 3;
$tinggi_kerucut = 8;

echo "Luas tanah budi adalah {$luas_tanah}";
