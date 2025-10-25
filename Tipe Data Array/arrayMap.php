<?php

$aufi = array(
  "nik" => "12345",
  "nama" => "Aufi Dhuha",
  "Umur" => 20
);
var_dump($aufi["nama"]);
var_dump($aufi);

echo "". PHP_EOL;

$mutaafif = [
  "nik" => "54321",
  "nama" => "Dhuha Mutaafif",
  "ipk" => 3.9
];
var_dump($mutaafif["ipk"]);
var_dump($mutaafif);

echo "". PHP_EOL;

$name = [
  "nik" => "13579",
  "nama" => "Aufi Dhuha Mutaafif",
  "Alamat" => "Kabupaten Nganjuk"
];
var_dump($name["Alamat"]);
var_dump($name);

echo "". PHP_EOL;

$biodata = [
    "nik" => "1234567890",
    "nama" => "Aufi Dhuha",
    "umur" => 20,
    "alamat" => [
        "kota" => "Nganjuk",
        "provinsi" => "Jawa Timur",
        "negara" => "Indonesia"
    ]
];
var_dump($biodata["alamat"]);
var_dump($biodata["alamat"]["provinsi"]);
var_dump($biodata);

