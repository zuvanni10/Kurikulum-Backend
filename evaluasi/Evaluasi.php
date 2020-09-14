<?php
 
 echo "Evaluasi 1";
 echo "\n\n";


 for ($i=1; $i <= 9; $i++) { 
    for ($j=1; $j <= 9; $j++) { 
        if ($j == 1 || $j == 3 || $j == 5 || $j == 7 || $j == 9) {
            echo "+";
        } else {
            echo "-";
        }
    }
    echo "\n";
}

echo "\n";

 for ($i=1; $i <= 9; $i++) { 
     for ($j=1; $j <= 9; $j++) { 
         if ($i == 2 || $i == 4 || $i == 6 || $i == 8) {
             echo "+";
         } else {
             echo "-";
         }
     }
     echo "\n";
 }

echo "\n\n";
echo "Evaluasi 2";
echo "\n\n";

$angka = 5956560159466056;

function selectionValue(string $selectionValue): int {

}

 echo "\n\n";
 echo "Evaluasi 3";
 echo "\n\n";

 echo "========================================\n";
 echo "| Selamat Datang Di Program Input Data |\n";
 echo "========================================\n";

 echo "Data yang ingin diinputkan : ";

 $input = trim(fgets(STDIN));

 for ($i=1; $i < $input; $i++) { 
     echo "Masukan Data ".$i."\n";
     echo "Nama : ";
     $students['name'] = trim(fgets(STDIN));
     echo "NIK : ";
     $students['nik'] = trim(fgets(STDIN));
     echo "Jurusan : ";
     $students['jurusan'] = trim(fgets(STDIN));
     echo "Divisi : ";
     $students['divisi'] = trim(fgets(STDIN));
     echo "Usia : ";
     $students['age'] = trim(fgets(STDIN));
     echo "\n";
 }

 foreach ($students as $key => $value) {

 }