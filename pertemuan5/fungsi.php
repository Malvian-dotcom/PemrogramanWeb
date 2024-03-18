<?php
//membuat fungsi perkenalan
function perkenalan ($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan ("Hamdana", "Hallo");

echo "<hr>";

$saya = "Putra";
$ucapanSalam = "Selamat pagi";

perkenalan ( $saya, $ucapanSalam);

/*membuat fungsi hitung umur
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

//function perkenalan($nama, $salam="Assalamualaikum") {
    echo $salam.",";
    echo "Perkenalkan, nama saya ".$nama."<br/>";

    echo "Saya berusia ". hitungUmur (1988, 2023)." tahun<br/>"; 
    echo "Senang berkenalan dengan anda";
}

perkenalan ("Putra");*/
?>