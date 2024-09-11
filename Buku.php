<?php

class Buku {
    public $ISBN;
    public $judul;
    public $deskripsi;
    public $kategori;
    public $bahasa;
    public $jumlahHalaman;
    public $penulis;
    public $penerbit;

    public function __construct($ISBN, $judul, $deskripsi, $kategori, $bahasa, $jumlahHalaman, $penulis, $penerbit) {
        $this->ISBN = $ISBN;
        $this->judul = $judul;
        $this->deskripsi = $deskripsi;
        $this->kategori = $kategori;
        $this->bahasa = $bahasa;
        $this->jumlahHalaman = $jumlahHalaman;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
    }

    public function tampilkanSemua() {
        return [
            'ISBN' => $this->ISBN,
            'Judul' => $this->judul,
            'Deskripsi' => $this->deskripsi,
            'Kategori' => $this->kategori,
            'Bahasa' => $this->bahasa,
            'Jumlah Halaman' => $this->jumlahHalaman,
            'Penulis' => $this->penulis,
            'Penerbit' => $this->penerbit
        ];
    }

    public function detail($ISBN) {
        if ($this->ISBN == $ISBN) {
            return $this->tampilkanSemua();
        }
        return [];
    }
}

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