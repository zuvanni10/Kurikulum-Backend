<?php

// $angka = [5, 9, 6, 7, 9, 8, 10, 7, 8];

// print_r($angka);

// Mean
echo "jumlah angka yang dimasukan : ";
$Jumlah = trim(fgets(STDIN));
$nilai=array();
for ($i = 1; $i <= $Jumlah; $i++) {
    echo "Input ke-" .$i. " : ";
    array_push($nilai, trim(fgets(STDIN)));
}

echo "\n";


$count = count($nilai);
echo "Mean : ";
$hasil = array_sum($nilai)/$count;
echo $hasil."\n";


// //Median   
$median = count($nilai)/2;
print_r($nilai);
sort($nilai);
if(is_double($median)){
    $median = floor($median);
    echo $nilai[$median];
} else {
    echo ($nilai[$median]+$nilai[$median-1]/2);
};
 echo "\n";

 $val = array_count_values($nilai);
 asort($val);
 echo "Modus : ";
 foreach ($val as $y => $z) {
     if($z == max($val)) {
         echo $y . ", ";
     }
 }

$frekuensi = max($val);
echo "Frekuensi : " . $frekuensi;
echo "\n";