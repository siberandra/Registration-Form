<?php
echo "Selamat Datang Di Bahasa Pemrograman <br> WEB dinamis dengan PHP <br>";
echo "<br> LABORATORIUM SISTEM INFORMASI <br> UNIVERSITAS GUNADARMA <br>";

$panjang=2;
$lebar=4;
$ket = "<br> luas persegi panjang <br>";
echo $ket,
$panjang, "*", $lebar, "=", $panjang*$lebar, "<br>";

define("Nama", "Mualifah");
define("Matkul", "Pemrograman Berbasis Web");
echo "<br> Nama = ", Nama, "<br>";
echo "Matkul = ", Matkul, "<br>";

$angka1 = 20;
$angka2 = 5;
$hasil = $angka1/$angka2;

echo "<br> Hasil pembagian $angka1 dan $angka2 adalah $hasil <br>";

/* ini
komentar */

// ini komentar

#ini komentar

echo "<br> contoh penggunaan komentar pada php <br>"; //Laboratorium Sistem Informasi

$nilai = 85;
if($nilai >80){
	echo "<br> Anda mendapat grade A <br>";
}

$usia = 18;
if($usia >= 20){
	echo "Selamat! Anda memenuhi persyaratan usia untuk melamar pekerjaan ini.";
}
else{
	echo "<br> Mohon maaf, Anda belum memenuhi cukup usia untuk melamar pekerjaan ini. <br>";

}

$nilai = 85;
if($nilai >= 90){
	echo "<br> Nilai Anda : A <br>";}
elseif($nilai >= 80){
	echo "<br> Nilai Anda : B <br>";}
elseif($nilai >= 70){
	echo "<br> Nilai Anda : C <br>";}
elseif($nilai >= 60){
	echo "<br> Nilai Anda : D <br>";}
else{echo "<br> Nilai Anda : E (Tidak Lulus) <br>";
}

$level=2;
switch($level){
	case 1:
	echo "<br> Pelajari HTML <br>";
	break;
	
	case 2;
	echo "<br> Pelajari PHP <br>";
	break;
	
	case 3:
	echo "<br>Pelajari CSS <br>";
	break;
	
default: echo"<br> Kamu bukan programmer! <br>";}





?>

