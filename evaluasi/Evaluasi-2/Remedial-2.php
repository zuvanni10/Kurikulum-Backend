<?php

class Register {
    function __construct() {
        echo "=============\n";
        echo " Data Santri \n";
        echo "=============\n";
    }

    protected static $Murid = [
        [
            'name' => 'Arief',
            'nik' => 'T001'
            ]
        ];
    }
    
class Siswa extends Register {
    public static function tambahMurid(){
        echo " Nama : ";
        $nama = trim(fgets(STDIN));
        echo " NIK : ";
        $nik = trim(fgets(STDIN));
        $data  = ['name' => $nama, 'nik' => $nik];

        self::$Murid[] = $data;
        print_r(self::$Murid);
    }

    public static function updateMurid(){
        for ($z=0; $z < count(self::$Murid); $z++) { 
            echo $z . " - " . self::$Murid[$z]['name'] . " " . self::$Murid[$z]['nik'] . "\n";
        }

        echo "=============\n";
        echo " Update Data \n";
        $update = (int)trim(fgets(STDIN));
        echo "=============\n";

        if ($update >= count(self::$Murid)) {
            echo " Data Tidak Ditemukan ";
        } else {
            echo " Nama : ";
            self::$Murid[$update]['name'] = trim(fgets(STDIN));
            echo " NIK : ";
            self::$Murid[$update]['nik'] = trim(fgets(STDIN));
            print_r(self::$Murid);
        }
    }

    public static function deleteMurid(){
        for ($z=0; $z < count(self::$Murid); $z++) { 
            echo $z . " - " . self::$Murid[$z]['name'] . " " . self::$Murid[$z]['nik'] . "\n";
        }

        echo "=============\n";
        echo " Delete Data \n";
        $del = (int)trim(fgets(STDIN));
        echo "=============\n";

        foreach (self::$Murid as $key => $d) {
            if ($d['nik'] == $del) {
                unset(self::$Murid[$key]);
                print_r(self::$Murid);
            } else {
                echo " Data Tidak Ditemukan ";
            }
        }
    }
}

function Mulai() {
    $dat = new Register();

    echo " 1. Tambah \n 2. Update \n 3. Delete \n\n";
    echo " Pilih Menu : ";

    $pilih = (int)trim(fgets(STDIN));

    if ($pilih == 1) {
        echo "\n\n=============\n";
        echo " Tambah Data \n";
        echo "=============\n";
        Siswa::tambahMurid();
    } elseif ($pilih == 2) {
        echo "\n\n=============\n";
        echo " Update Data \n";
        echo "=============\n";
        Siswa::updateMurid();
    } elseif ($pilih == 3) {
        echo "\n\n=============\n";
        echo " Delete Data \n";
        echo "=============\n";
        Siswa::deleteMurid();
    } else {
        echo " Data Tidak Ditemukan ";
    }
}

Mulai();