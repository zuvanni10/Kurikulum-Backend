<?php

$angka = [2, 3, 4, 5, 6, 7, 8, 9];

function kali($angka) {
    foreach ($angka as $nilai) {
        $data[] = $nilai*3;
    }
    print_r($data);
}

kali($angka);