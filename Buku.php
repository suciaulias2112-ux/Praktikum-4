<?php
declare(strict_types=1);

class Buku {
    public function __construct(
        public string $judul,
        public string $penulis,
        public int $tahun,
    ) {}
    
    public function tampilInfo(): string {
        return "Buku: '{$this->judul}', Penulis: {$this->penulis}, Tahun: {$this-> tahun}";
    }
}

$buku1 = new Buku("Belajar Pemrograman PHP", "Oscar Piastri", 2025);
$buku2 = new Buku("Pemrograman Web Bagi Pemula", "Jeon Wonwoo", 2023);
$buku3 = new Buku("Dasar-Dasar Design Antarmuka Pengguna", "Wanda Maximoff", 2020);

echo $buku1->tampilInfo() . "<br>";
echo $buku2->tampilInfo() . "<br>";
echo $buku3->tampilInfo() . "<br>";
