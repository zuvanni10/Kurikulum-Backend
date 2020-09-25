<?php
 
//  echo "Evaluasi 1";
//  echo "\n\n";


//  for ($i=1; $i <= 9; $i++) { 
//     for ($j=1; $j <= 9; $j++) { 
//         if ($j == 1 || $j == 3 || $j == 5 || $j == 7 || $j == 9) {
//             echo "+";
//         } else {
//             echo "-";
//         }
//     }
//     echo "\n";
// }

// echo "\n";

//  for ($i=1; $i <= 9; $i++) { 
//      for ($j=1; $j <= 9; $j++) { 
//          if ($i == 2 || $i == 4 || $i == 6 || $i == 8) {
//              echo "+";
//          } else {
//              echo "-";
//          }
//      }
//      echo "\n";
//  }
 
 
 
 echo "\n\n";
 echo "Evaluasi 3";
 echo "\n\n";

 echo "========================================\n";
 echo "| Selamat Datang Di Program Input Data |\n";
 echo "========================================\n";

 echo "Data yang ingin diinputkan : ";

$input = trim(fgets(STDIN));

for ($i=0; $i < $input; $i++) { 
    echo "Masukan Data ".($i+1)."\n";
    echo "Nama : ";
    $students[$i]['name'] = trim(fgets(STDIN));
    echo "NIK : ";
    $students[$i]['nik'] = trim(fgets(STDIN));
    echo "Jurusan : ";
    $students[$i]['jurusan'] = trim(fgets(STDIN));
    echo "Divisi : ";
    $students[$i]['divisi'] = trim(fgets(STDIN));
    echo "Umur : ";
    $students[$i]['age'] = trim(fgets(STDIN));
    echo "\n";
}
print_r($students);

for ($i=0; $i < $input; $i++) { 
    if ($students[$i]['divisi'] == "Backend") {
        echo "Yang minat sebagai Backend adalah ".$students[$i]['name'].", ";
    }
}
echo "\n";

for ($i=0; $i < $input; $i++) { 
    if ($students[$i]['age'] <25) {
        echo "Usia yang kurang dari 25 adalah ".$students[$i]['name'].", ";
    }
}
echo "\n";

foreach ($students as $key => $value) {
    $umur[] = $value['age'];
}
array_multisort($umur, SORT_ASC, $students);
echo "Usia yang paling muda ".$students[0]['name'];

echo "\n\n";