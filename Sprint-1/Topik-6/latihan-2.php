<?php

echo '==================================================='."\n";
echo '||                                               ||'."\n";
echo '||                 Luas Bangun                   ||'."\n";
echo '||                                               ||'."\n";
echo '==================================================='."\n";
echo '1. Segitiga'."\n".'2. Lingkaran'."\n".'3. Trapesium'."\n";

$pilihan = (int) trim(fgets(STDIN));

$Segitiga = function ($alas, $tinggi) {
    echo "Luas Segitiga : ";
    $luas = ($alas*$tinggi)*1/2;
    echo $luas . "\n";
};

$Lingkaran = function ($r) {
    $phi = 3.14;
    echo "Luas Lingkaran : ";
    $luas = $phi*$r**2;
    echo $luas . "\n";
};

$Trapesium = function ($y, $z, $t) {
    echo "Luas Trapesium : ";
    $luas = 1/2*($y+$z)*$t;
    echo $luas . "\n";
};

if ($pilihan == 1) {
    echo "Alas : ";
    $alas = (int) trim(fgets(STDIN));
    echo "Tinggi : ";
    $tinggi = (int) trim(fgets(STDIN));
    $Segitiga($alas, $tinggi)."\n";
} else if($pilihan == 2) {
    echo "Jari-jari : ";
    $r = (int) trim(fgets(STDIN));
    $Lingkaran($r)."\n";
} else if($pilihan == 3) {
    echo "Sisi Sejajar 1 : ";
    $y = (int) trim(fgets(STDIN));
    echo "Sisi Sejajar 2 : ";
    $z = (int) trim(fgets(STDIN));
    echo "Tinggi : ";
    $t = (int) trim(fgets(STDIN));
    $Trapesium($y, $z, $t)."\n";
}