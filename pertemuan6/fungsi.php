<?php
//fungsi untuk menampilkan kalimat 
/*function perkenalan(){
    echo "Assalamualaikum, ";
    echo "Perkenalan, nama saya Elok";
    echo "Senang berjenalan dengan Anda ";
}
perkenalan ();*/

//fungsi atau method berparamater 
/*function perkenalan ($nama, $salam){
    echo $salam.",";
    echo "Perkenalan, nama saya ".$nama."";
    echo "Senang berjenalan dengan Anda ";
}

//pemanggilan fungsi
perkenalan ("Hamdana", "hallo");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat Pagi";

perkenalan ($saya, $ucapanSalam);*/

//fungsi Parameter dengan Nilai Default 
/*function perkenalan ($nama, $salam="Assalamualaikum") {
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."";
    echo "Senang berkenalan dengan Anda";
}

//memanggil function yang telah dibuat 
perkenalan("Hamdana", "Hallo");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat pagi";

//Memanggil function kembali, tanpa mengisi paramater salam.
// Otomatis nanti yang muncul adalah salam yang default 
perkenalan($saya); */

//pembuatan code baru dengan Fungsi yang Mengembalikan Nilai 
/*function hitungUmur ($thn_lahir, $thn_sekarang) {
$umur = $thn_sekarang - $thn_lahir;
return $umur;
}

echo "Umur saya adalah ". hitungUmur (2000, 2023)." tahun"*/

//pembuatan code baru dengan Memangil Funsi di dalam fungsi 
/*function hitungUmur ($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan ($nama, $salam="Assalamualaikum") {
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br>";
}

//memanggil fungsi lain
echo "Saya berusia ". hitungUmur (2003, 2023)." tahun </br>";
echo "Senang berkenalan dengan anda </br>";

perkenalan ("Elok")*/
?>