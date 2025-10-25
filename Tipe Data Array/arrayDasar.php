<?php

$values = array(1, 2, 3, 4, 7.5, 8.2);
var_dump($values);

$names = ["Aufi", "Dhuha", "Mutaafif"];
var_dump($names);

// mengubah nilai pada array tertentu
$values[2] = 30;
var_dump($values);

// menambahkan array dengan value
$names[] = "Musthofa";
var_dump($names);

// menghitung jumlah array
var_dump(count($values));
var_dump(count($names));