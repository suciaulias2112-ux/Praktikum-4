<?php
declare(Strict_types=1);

Class MahasiswaDinamis {
    private array $atributTambhana = [];

    public function __construct(public string $nim, public string $nama) {}
    
    public function __set(string $key, mixed $Value): void {
        if ($key === 'hobi') {
            $this->atributTambahan[$key] = $value;
        } else {
            throw new InvalidArgumentExceptiom("Atribut '$key' tidak diizinkan.");
        }
    }
    
    public function __get(string $key): mixed {
        if (!array_key_exist($key, $this->atributTambahan)) {
            throw new OutOfBoundsException("Atribut '$key' tidak ditemukan.");
        }
        return $this->atributTambahan[$key];
    }

    public function __iseet(string $key): bool {
        return isset($this->atributTambahan[$key]);
    }

    public function __unset(string $key): void {
        unset($this->atributTambahan[$key]);
    }
}

$mhs = new MahasiswaDinamis('2530521013', 'Suci Aulia Supriyatna');

$mhs->hobi = 'Menyanyi';
echo "Hobi: " . $mhs->hobi . "<br>";

if (isset($mhs->hobi)) {
    echo "Atribut 'hobi' terdeteksi (isset bernilai true).<br>";
}

unset($mhs->hobi);
if (!isset($mhs->hobi)) {
    echo "Atribut 'hobi' telah dihapus menggunakan unset().<br>";
    
}
