<?php

class bangunRuang {

    public static function persegiPanjang($p, $l, $rumus) {
        if ($p < 0 || $l < 0) {
            throw new Exception('Error Processing Request');
        }
        if ($rumus == 'luas') {
            return $p*$l;
        } else if ($rumus == 'keliling') {
            return 2*($p+$l);
        } else {
            return "Pilihan Tidak Ditemukan \n";
        }
    }

    public static function lingkaran($r, $rumus) {
        if ($r < 0) {
            throw new Exception('Error Processing Request');
        }
        if ($rumus == 'luas') {
            return 3.14*$r**2;
        } else if ($rumus == 'keliling') {
            return 2*3.14*$r;
        }
    }

    public static function trapesium($a, $b, $c, $d, $t, $rumus) {
        if ($a < 0 || $b < 0 || $c < 0 || $d < 0 || $t < 0) {
            throw new Exception('Error Processing Request');
        }
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
    $pilih = (int) trim(fgets(STDIN));

    if ($pilih == 1) {
        echo " Persegi Panjang \n";
        echo "Panjang : ";
        $p = (int) trim(fgets(STDIN));
        echo "Lebar : ";
        $l = (int) trim(fgets(STDIN));

        echo " 1. Luas \n 2.Keliling\n";
        $rumus = (int) trim(fgets(STDIN));

        if ($rumus == 1) {
            $rumus = 'luas';
        } else if ($rumus == 2) {
            $rumus = 'keliling';
        } else {
            echo "Pilihan Tidak Ditemukan \n";
        }
        
        try {
            echo $rumus . " : " . bangunRuang::persegiPanjang($p, $l, $rumus);
        } catch (Exception $z) {
            echo "Error pada " . $z->getFile() . " baris ke " . $z->getLine() ."\n";
            echo $z->getMessage();
        }
        echo "\n";
    } else if ($pilih == 2) {
        echo " Lingkaran \n";
        echo "Jari-jari : ";
        $r = (int) trim(fgets(STDIN));

        
        $rumus = (int) trim(fgets(STDIN));

        if ($rumus == 1) {
            $rumus = 'luas';
        } else if ($rumus == 2) {
            $rumus = 'keliling';
        } else {
            echo "Pilihan Tidak Ditemukan \n";
        }

        try {
            echo $rumus . " : " . bangunRuang::lingkaran($r, $rumus);
        } catch (Exception $z) {
            echo "Error pada " . $z->getFile() . " baris ke " . $z->getLine() ."\n";
            echo $z->getMessage();
        }
        echo "\n";
    } else if ($pilih == 3) {
        echo " Trapesium \n";
        echo "Sisi sejajar 1 : ";
        $s1 = (int) trim(fgets(STDIN));
        echo "Sisi sejajar 2 : ";
        $s2 = (int) trim(fgets(STDIN));
        echo "Tinggi : ";
        $t = (int) trim(fgets(STDIN));
        echo "Sisi kanan : ";
        $sr = (int) trim(fgets(STDIN));
        echo "Sisi kiri : ";
        $sl = (int) trim(fgets(STDIN));


        $rumus = (int) trim(fgets(STDIN));

        if ($rumus == 1) {
            $rumus = 'luas';
        } else if ($rumus == 2) {
            $rumus = 'keliling';
        } else {
            echo "Pilihan Tidak Ditemukan \n";
        }
        
        try {
            echo $rumus . " : " . bangunRuang::trapesium($s1, $s2, $sr, $sl, $t, $rumus);
        } catch (Exception $z) {
            echo "Error pada " . $z->getFile() . " baris ke " . $z->getLine() ."\n";
            echo $z->getMessage();
        }
        echo "\n";
    } else {
        echo "Pilihan Tidak Ditemukan \n";
    }
}

Perhitungan();