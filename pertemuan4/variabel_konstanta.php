<?php
//membuat variabel penjumlahan
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil." ;

//membuat variabel bolean
$benar = true;
$salah = false;
echo "Variable benar: $benar, Variable salah: $salah";

//mendefinisikan konstatnta untuk nilai tetap
define("NAMA_SITUS", "Websiteku.com");
define("TAHUN_PENDIRIAN", 2023);

echo "Selamat datang di " . NAMA_SITUS . ", situs yang didirikan pada tahun " . TAHUN_PENDIRIAN . ".";
?>