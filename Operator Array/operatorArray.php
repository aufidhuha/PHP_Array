<?php

$first = [
    "first_name" => "Aufi"
];

$last = [
    "last_name" => "Dhuha"
];

//union atau menggabungkan
$full = $first + $last;
var_dump($full);


$first2 = [
    "first_name" => "Aufi"
];

$last2 = [
    "first_name" => "Muhammad",
    "last_name" => "Dhuha"
];


/*
// value pertama yang diutamakan jika ada bentrok atau
// ketidakseimbangan value
*/
$full2 = $first2 + $last2;
$full22 =  $last2 + $first2;
var_dump($full2);
var_dump($full22);


$first3 = [
    "last_name" => "Dhuha",
    "first_name" => "Aufi"
];

$last3 = [
    "first_name" => "Aufi",
    "last_name" => "Dhuha"
];

// identity atau pengecekan
var_dump($first3 == $last3);
var_dump($first3 === $last3);

