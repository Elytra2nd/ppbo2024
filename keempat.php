<?php
require_once 'Penerbit.php';
require_once 'Penulis.php';
require_once 'Buku.php';


// Contoh penggunaan:
$penulis = new Penulis('J.K. Rowling', 'Penulis asal Inggris, terkenal dengan seri Harry Potter.');
$penerbit = new Penerbit('Bloomsbury', '50 Bedford Square, London', '02076316500');
$buku = new Buku(9780747532743, 'Harry Potter dan Batu Bertuah', 'Novel fantasi', 'Fiksi', 'Bahasa Inggris', 223, $penulis->tampilkan('nama'), $penerbit->nama);

$dataBuku = $buku->tampilkanSemua();

echo "ISBN: " . $dataBuku['ISBN'] . "\n";
echo "Judul: " . $dataBuku['Judul'] . "\n";
echo "Deskripsi: " . $dataBuku['Deskripsi'] . "\n";
echo "Kategori: " . $dataBuku['Kategori'] . "\n";
echo "Bahasa: " . $dataBuku['Bahasa'] . "\n";
echo "Jumlah Halaman: " . $dataBuku['Jumlah Halaman'] . "\n";
echo "Penulis: " . $dataBuku['Penulis'] . "\n";
echo "Penerbit: " . $dataBuku['Penerbit'] . "\n";
?>
