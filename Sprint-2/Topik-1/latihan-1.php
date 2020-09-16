<?php

class Perpustakaan {
    public $buku = ['judul', 'isbn'];
    public $pengunjung = ['id', 'name'];

    function set_pengunjung($pengunjung) {
        $this->pengunjung = $pengunjung;
    }

    function set_buku($buku) {
        $this->buku = $buku;
    }
}

class Pengunjung extends Perpustakaan
{
    function pinjam() {
        $pinjam = $this->pengunjung['nama'] . " meminjam buku yang berjudul : ".$this->buku['judul']."\n"."ISBN : ".$this->buku['isbn'];
        return $pinjam;
    } 


    function kembali() {
        $kembali = $this->pengunjung['nama']. " mengembalikan buku ".$this->buku['judul']."\n"."ID : ".$this->pengunjung['id'];
        return $kembali;
    }
}

$perpus = new Pengunjung();
$perpus->set_buku(['judul'=>'Laskar Pelangi', 'isbn'=>'978-602-8519-93-9']);
$perpus->set_pengunjung(['id'=>'005', 'nama'=>'Umair']);

echo $perpus->pinjam();
echo "\n";
echo $perpus->kembali();
echo "\n";
