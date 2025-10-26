<?php

$person = [
    [
        "Nama" => "Aufi Dhuha",
        "Alamat" => "Kabupaten Nganjuk",
        "Umur" => 20
    ],
    
    [
        "Nama" => "Andi WIjaya",
        "Alamat" => "Kabupaten Kediri",
        "Umur" => 25
    ],
    
    [
        "Nama" => "Umar Bakri",
        "Alamat" => "Kota Surabaya",
        "Umur" => 21
    ]
];

// for loop
echo "--- Array Map For Loop ---" . PHP_EOL;
for($i = 0; $i < count($person); $i++){
    echo "Nama : " . $person[$i]["Nama"] . PHP_EOL;
    echo "Alamat : " . $person[$i]["Alamat"]  . PHP_EOL;
    echo "Umur : " . $person[$i]["Umur"]  . PHP_EOL;
    echo "" . PHP_EOL;
}

echo "" . PHP_EOL;

//foreach
echo "--- Array Map Foreach ---" . PHP_EOL;
foreach ($person as $values) {
    echo "Nama : " . $values["Nama"] . PHP_EOL;
    echo "Alamat : " . $values["Alamat"]  . PHP_EOL;
    echo "Umur : " . $values["Umur"]  . PHP_EOL;
    echo "" . PHP_EOL;
}

echo "" . PHP_EOL;

//foreach
echo "--- Array Map Foreach Key Map ---" . PHP_EOL;
foreach ($person as $value) {
    foreach ($value as $key => $values) {
        echo "$key : $values" . PHP_EOL;
    }
echo "" . PHP_EOL;
}

