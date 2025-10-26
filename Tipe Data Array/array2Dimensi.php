<?php

// array pertama
$values = [
    [1, 2, 3, 4, 5],
    [6, 7, 8, 9, 0]
];

for ($i = 0; $i < count($values); $i++) {
    for ($j = 0; $j < count($values[$i]); $j++) {
        echo $values[$i][$j] . " ";
    }
    echo " " . PHP_EOL;
}

echo " " . PHP_EOL;

foreach ($values as $row) {
    foreach ($row as $column) {
        echo $column . " ";
    }
    echo " " . PHP_EOL;
}

echo " " . PHP_EOL;


//array kedua
$name = [
    ["Aufi Dhuha", "Nganjuk", 20],
    ["Doni Saputra", "Kediri", 20],
    ["Rama Wijaya", "Jombang", 19]
];

for ($i = 0; $i < count($name); $i++) {
    for ($j = 0; $j < count($name[$i]); $j++) {
        // echo $name[$i][$j] . " "; bisa menggunakan syntax disamping atau dibawah
        echo "{$name[$i][$j]} | ";
    }
    echo " " . PHP_EOL;
}

echo "" . PHP_EOL;

foreach ($name as $rowName) {
    foreach ($rowName as $columntRow) {
        echo $columntRow . " | ";
    }
    echo " " . PHP_EOL;
}

echo " " . PHP_EOL;

foreach ($name as $value) {
    echo "Nama : $value[0]" . PHP_EOL;
    echo "Alamat : $value[1]" . PHP_EOL;
    echo "Umur : $value[2]" . PHP_EOL . PHP_EOL;
}