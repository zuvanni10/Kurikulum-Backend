<?php

$students = [
    [
        'id' => 'IT-001',
        'name' => 'Ridwan',
        'division' => 'PHP Backend',
        'age' => 25,
    ],
    [
        'id' => 'IT-010',
        'name' => 'Achmad',
        'division' => 'Java for Android',
        'age' => 23,
    ],
    [
        'id' => 'IT-005',
        'name' => 'Yusuf',
        'division' => 'ReactJS',
        'age' => 22,
    ],
    [
        'id' => 'IT-002',
        'name' => 'Arief',
        'division' => 'PHP Backend',
        'age' => 21,
    ],
    [
        'id' => 'IT-004',
        'name' => 'Dayat',
        'division' => 'React Native',
        'age' => 21,
    ],
    [
        'id' => 'IT-017',
        'name' => 'Lutfi',
        'division' => 'ReactJS',
        'age' => 18,
    ],
];

function nomorInduk($list) {
    echo "<h4>Daftar Santri Berdasarkan nomor induk terkecil - terbesar</h4>";
    asort($list);
    echo "<table border='1'>";
    echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>Name</th>";
        echo "<th>Division</th>";
        echo "<th>Age</th>";
    echo "</tr>";
    foreach ($list as $value) {
        echo "<tr>";
            echo "<td>" . $value['id'] . "</td>";
            echo "<td>" . $value['name'] . "</td>";
            echo "<td>" . $value['division'] . "</td>";
            echo "<td>" . $value['age'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<hr>";
}

function Nama($list) {
    echo "<h4>Daftar Nama Santri Berdasarkan Abjad</h4>";
    ksort($list);
    for ($i=0; $i < count($list); $i++) { 
        $nama[] = $list[$i]['name'];
    }
    array_multisort($nama, SORT_ASC, $list);

    echo "<table border='1'>";
    echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>Name</th>";
        echo "<th>Division</th>";
        echo "<th>Age</th>";
    echo "</tr>";
    foreach ($list as $value) {
        echo "<tr>";
            echo "<td>" . $value['id'] . "</td>";
            echo "<td>" . $value['name'] . "</td>";
            echo "<td>" . $value['division'] . "</td>";
            echo "<td>" . $value['age'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<hr>";
}

function Divisi($list) {
    echo "<h4>Daftar santri dengan minat PHP Backend </h4>";
    asort($list);
    echo "<table border='1'>";
    echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>Name</th>";
        echo "<th>Division</th>";
        echo "<th>Age</th>";
    echo "</tr>";
    foreach ($list as $value) {
        if ($value['division'] == 'PHP Backend') {
            echo "<tr>";
                echo "<td>" . $value['id'] . "</td>";
                echo "<td>" . $value['name'] . "</td>";
                echo "<td>" . $value['division'] . "</td>";
                echo "<td>" . $value['age'] . "</td>";
            echo "</tr>";
            continue;
        }
    }
    echo "</table>";
    echo "<hr>";
}

function Umur($list) {
    echo "<h4>Daftar Santri Berusia Kurang dari 25</h4>";
    asort($list);
    echo "<table border='1'>";
    echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>Name</th>";
        echo "<th>Division</th>";
        echo "<th>Age</th>";
    echo "</tr>";
    foreach ($list as $value) {
        if ($value['age'] < 25) {
            echo "<tr>";
                echo "<td>" . $value['id'] . "</td>";
                echo "<td>" . $value['name'] . "</td>";
                echo "<td>" . $value['division'] . "</td>";
                echo "<td>" . $value['age'] . "</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
    echo "<hr>";
}

function rataRata($list) {
    echo "<h4>Rata-rata usia santri</h4>";
    asort($list);
    for ($i=0; $i < count($list); $i++) { 
        $age[] = $list[$i]['age'];
    }
    
    $count = count($age);
    $sum = array_sum($age);
    echo $sum/$count . " Tahun";
}

function santriMuda($list) {
    echo "<h4>Santri berusia paling muda</h4>";
    asort($list);
    for ($i=0; $i < count($list); $i++) { 
        $age[] = $list[$i]['age'];
    }
    echo "<table border='1'>";
    echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>Name</th>";
        echo "<th>Division</th>";
        echo "<th>Age</th>";
    echo "</tr>";
    foreach ($list as $value) {
        if ($value['age'] == min($age)) {
            echo "<tr>";
                echo "<td>" . $value['id'] . "</td>";
                echo "<td>" . $value['name'] . "</td>";
                echo "<td>" . $value['division'] . "</td>";
                echo "<td>" . $value['age'] . "</td>";
            echo "</tr>";
            continue;
        }
    }
    echo "</table>";
    echo "<hr>";
}

nomorInduk($students);
Nama($students);
Divisi($students);
Umur($students);
rataRata($students);