<?php

class DemoSiklus {
    public function __construct() { echo "Object dibuat<br>"; }
    public function tampil(): void { echo "Method dipanggil<br>"; }
    public function __destruct() { echo "Destructor berjalan<br>"; }
}

$obj = new Demosiklus();
$obj->tampil();
unset($obj);
echo "Program dilanjutkan<br>";

$obj2 = new Demosiklus();
$obj2->tampil();
echo "Program dilanjutkan<br>";

$obj3 = new Demosiklus();
$alias = $obj3;
unset($obj3);
echo "Setelah unset(\$obj3): object masih punya alias<br>";
unset($alias);
