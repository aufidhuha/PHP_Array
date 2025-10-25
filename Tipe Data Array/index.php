<?php

$value = [1, 2, 3, 4, 5];

for($i = 0; $i < count($value); $i++){
    echo "Array ke-$i adalah $value[$i]" . PHP_EOL;
}

echo "" . PHP_EOL;

$value2 = [1, "Aku", 3, "Saya", 5];
for($i = 0; $i < count($value2); $i++){
    echo "Array ke-$i adalah $value2[$i]" . PHP_EOL;
}

echo "" . PHP_EOL;

$value3 = ["Aufi", "Dhuha", "Mutaafif", "Saya", "Aku"];
for($i = 0; $i < count($value3); $i++){
    echo "Array ke-$i adalah $value3[$i]" . PHP_EOL;
}

echo "" . PHP_EOL;
