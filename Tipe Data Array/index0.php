<?php

$value = [10, 20, 30, 40, 50];

foreach ($value as $values){
    echo "Data : $values" . PHP_EOL;
}

echo "" . PHP_EOL;

$person1 = [
    "Aufi",
    "Dhuha",
    "Mutaafif"
];

foreach ($person1 as $key => $persons1){
    echo "Data ke-$key : $persons1" . PHP_EOL;
}

echo "" . PHP_EOL;

$person2 = [
   "first_name" => "Aufi",
   "middle_name" => "Dhuha",
   "last_name" => "Mutaafif"
];

foreach ($person2 as $key => $persons2){
    echo "$key : $persons2" . PHP_EOL;
}