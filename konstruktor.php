<?php
declare(strict_types=1);

class Mahasiswa {
    public function __construct(
        public string $nim,
        public string $nama,
        public int $semester = 1
    ) {}

    public function profil(): string {
        return "$this->nim - $this->nama (Semester $this->semester)";
    }
}

$mhs= new Mahasiswa('231001', 'Alya', 3);
echo $mhs->profil() . "<br>";

// Objek kedua tanpa argumen semester, nilai default 1
$mhs2 = new Mahasiswa('231002', 'Septi');
echo $mhs->profil() . "<br>";

// Semester diisi string non-numerik
try {
    $mhs3 = new Mahasiswa('231003', 'Galaksi', 'tiga');
    echo $mhs->profil() . "<br>";
} catch (TypeError $e) {
    echo "TypeError: " . $e->getMessage() . "<br>";
}


