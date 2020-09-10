<?php

// $nilai = [5, 9, 6, 7, 9, 8 , 10, 7, 8];

echo "Angka yang dimasukkan : ";
$angka = trim(fgets(STDIN));

for($y = 1; $y <= $angka; $y++) {
    echo "Input ke-".$y." : ";
    $nilai[] = trim(fgets(STDIN));
}

rsort($nilai);

echo "\n";

for($y = 0; $y < 3; $y++) {
    $max[] = $nilai[$y];
}

echo "Highest : ";
print_r($max);

sort($nilai);

for($y = 0; $y < 3; $y++) {
    $min[] = $nilai[$y];
}

echo "Lowest : ";
print_r($min);