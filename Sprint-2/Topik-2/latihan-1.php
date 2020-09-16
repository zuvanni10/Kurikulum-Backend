<?php

class bangunRuang {

    public static function persegiPanjang($p, $l, $rumus) {
        if ($rumus == 'luas') {
            return $p*$l;
        } else if ($rumus == 'keliling') {
            return 2*($p+$l);
        }
    }

    public static function lingkaran($r, $rumus) {
        if ($rumus == 'luas') {
            return 3.14*$r**2;
        } else if ($rumus == 'keliling') {
            return 2*3.14*$r;
        }
    }

    public static function trapesium($a, $b, $c, $d, $t, $rumus) {
        if ($rumus == 'luas') {
            return 1/2*($a + $b)*$t;
        } else if ($rumus == 'keliling') {
            return $a + $b + $c + $d;
        }
    }
    
}

function Perhitungan() {
    echo "================= \n";
    echo "   BANGUN RUANG   \n";
    echo "================= \n";
    echo "1. Persegi Panjang \n2. Lingkaran \n3. Trapesium \n";
    echo "Pilih bangun ruang : ";
    $pilih = trim(fgets(STDIN));

    if ($pilih == 1) {
        echo " Persegi Panjang \n";
        echo "Panjang : ";
        $p = trim(fgets(STDIN));
        echo "Lebar : ";
        $l = trim(fgets(STDIN));
        

        $rumus = trim(fgets(STDIN));

        if ($rumus == 1) {
            $rumus = 'luas';
        } else if ($rumus == 2) {
            $rumus = 'keliling';
        } else {
            echo "Pilihan tidak ditemukan!";
        }
        
        echo $rumus . " : " . bangunRuang::persegiPanjang($p, $l, $rumus);
        echo "\n";
    } else if ($pilih == 2) {
        echo " Lingkaran \n";
        echo "Jari-jari : ";
        $r = trim(fgets(STDIN));


        $rumus = trim(fgets(STDIN));

        if ($rumus == 1) {
            $rumus = 'luas';
        } else if ($rumus == 2) {
            $rumus = 'keliling';
        } else {
            echo "Pilihan tidak ditemukan!";
        }

        echo $rumus . " : " . bangunRuang::lingkaran($r, $rumus);
        echo "\n";
    } else if ($pilih == 3) {
        echo " Trapesium \n";
        echo "Sisi sejajar 1 : ";
        $s1 = trim(fgets(STDIN));
        echo "Sisi sejajar 2 : ";
        $s2 = trim(fgets(STDIN));
        echo "Tinggi : ";
        $t = trim(fgets(STDIN));
        echo "Sisi kanan : ";
        $sr = trim(fgets(STDIN));
        echo "Sisi kiri : ";
        $sl = trim(fgets(STDIN));


        $rumus = trim(fgets(STDIN));

        if ($rumus == 1) {
            $rumus = 'luas';
        } else if ($rumus == 2) {
            $rumus = 'keliling';
        } else {
            echo "Pilihan tidak ditemukan!";
        }
        
        echo $rumus . " : " . bangunRuang::trapesium($s1, $s2, $sr, $sl, $t, $rumus);
        echo "\n";
    } else {
        echo "Pilihan tidak ditemukan!";
    }
}

perhitungan();