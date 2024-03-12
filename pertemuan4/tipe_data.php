<?php
//membuat variabel tipe data int
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br>";

var_dump($e);

//menambahkan variabel tipe data float
$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia)/3;

echo "Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata: {$rataRata} <br>";

var_dump($rataRata);

//menambahkan variabel tipe data boolean
$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

var_dump($apakahSIswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);

//menambahkan variabel tipe data string
$namaDepan = "ibnu";
$namaBelakang = 'Jakarta';

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $NamaDepan . ' ' .$namaBelakang;

echo "Nama Depan: {$namaDepan} ,<br>";
echo 'Nama Belakang: ' . $namaBelakang . '<br>';

echo $namaLengkap;

//menambahkan variabel baru tipe data array
$listMahasis = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
echo $listMahasiswa[0];
?>