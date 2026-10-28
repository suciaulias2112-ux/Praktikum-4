<?php
declare(strict_types=1);

class Buku {
    public function __construct(
        public string $judul,
        public string $penulis,
        public int $tahun
    ) {
        echo "Object Buku '$this->judul' dibuat<br>";
    }

    public function tampilInfo(): string {
        return "$this->judul - $this->penulis ($this->tahun)";
    }

    public function __destruct() {
        echo "Destructor berjalan: buku '$this->judul' dihancurkan<br>"; 
    } 
}

echo "<b>Bagian 1: Uji unset Tanpa Alias</b><br>";
$buku1 = new Buku("Belajar Pemrograman PHP", "Oscar Piastri", 2025);
unset($buku1); 
echo "Program dilanjutkan (Bagian 1)<br><br>";

echo "<b>Bagian 2: Uji Destructor Dengan Alias</b><br>";
$buku2 = new Buku("Pemrograman Web Bagi Pemula", "Jeon Wonwoo", 2023);
$aliasBuku2 = $buku2; 
unset($buku2); 
echo "Setelah unset(\$buku2), object masih diferensikan oleh \$aliasBuku2<br>";
echo $aliasBuku2->tampilinfo() . "<br>";
echo "Program selesai.";
