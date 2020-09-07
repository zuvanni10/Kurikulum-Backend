<?php 

$PanjangPersegi = 5;
$LebarPersegi = 8;

function luas_persegi_panjang($PanjangPersegi, $LebarPersegi)
{
	$hasil = $PanjangPersegi * $LebarPersegi;
	echo "Hasil Perhitungan Persegi Panjang, Panjang = <b>".$PanjangPersegi."</b> & Lebar = <b>".$LebarPersegi."</b> = <b>".$hasil."</b><br/>"; 
}
 
luas_persegi_panjang($PanjangPersegi, $LebarPersegi);

?>