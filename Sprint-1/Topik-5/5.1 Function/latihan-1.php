<?php

echo '=========================='."\n";
echo '||    Persegi Panjang    ||'."\n";
echo '=========================='."\n";
echo 'Mencari Menghitung rumus apa?'."\n";


$pilihan = (int) trim(fgets(STDIN));

function calcRectangleArea($width, $length) {
    return $width*$length;
}

function keliling($p, $l) {
    return ($p+$l)*2;
}

if ($pilihan == 1) {
    echo "Panjang : ";
    $panjang = (int) trim(fgets(STDIN));
    echo "Lebar : ";
    $lebar = (int) trim(fgets(STDIN));
    echo "Luas : ".calcRectangleArea($panjang, $lebar)."\n";
} else if ($pilihan == 2) {
    echo "Panjang : ";
    $panjang = (int) trim(fgets(STDIN));
    echo "Lebar : ";
    $lebar = (int) trim(fgets(STDIN));
    echo "Keliling : ".keliling($panjang, $lebar)."\n";
} else {
    echo "Pilihan tidak ditemukan ! \n";
}