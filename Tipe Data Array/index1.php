<?php

echo "Masukkan Jumlah : ";
$jumlah = readline();

$jumlahValue = [];

for ($i = 0; $i < $jumlah; $i++){
    echo "Masukkan Angka ke-" . ($i + 1) . " : ";
    $nilai = readline();
    $jumlahValue[$i] = $nilai;
}

print_r($jumlahValue);

echo PHP_EOL . "Output : ";
for($i = 0; $i < count($jumlahValue); $i++){
    echo "$jumlahValue[$i] ";
}