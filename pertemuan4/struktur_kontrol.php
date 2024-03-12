<?php
//membuat bariabel struktur kontorl if else
$nilaiNumerik = 92;

if ($nilaNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
}elseif ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80){
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}
echo "<br><br>";

//menambahkan kode while
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 km. <br><br>";

//menambahkan kode for
$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i=1; $i<$jumlahLahan;$i++) {
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah <br><br>";

//menambahkan kode untuk loop foreach dengan menggunakan struktur kontrol if 
$skorUjian = [85, 92, 78, 96, 88]; 
$totalSkor = 0; 

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
} 

echo "Total skor ujian adalah: $totalSkor <br><br>"; 

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96]; 
foreach ($nilaiSiswa as $nilai) { 
    if ($nilai < 60) { 

    } echo "Nilai: $nilai (Tidak lulus) <br>"; 
    continue; 
echo "Nilai: $nilai (Lulus <br>"; 
}

//soal
$nilaiMat = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
    sort($nilaiMat);

    $jumlahNilaiMat = 0;
    for ($i = 2; $i < (count($nilaiMat)-2); $i++){
        $jumlahNilaiMat += $nilaiMat[$i];
    }
    $rataRataNilai = $jumlahNilaiMat / (count($nilaiMat)-4); 
    echo "<br> Rata-rata nilai Matematika = $rataRataNilai";
    echo "<br><br>";

//soal
echo "Soal: <br>"; 
$hargaPelanggan = 1200000; 
if ($hargaPelanggan > 100000) {
    $diskon = 20 / 100* $hargaPelanggan;
    $bayar = $hargaPelanggan - $diskon;
    echo "Total yang harus dibayar pelanggan setelah mendapatkan diskon: Rp$bayar"; 
    } else {
    echo "Pelanggan tidak mendapatkan diskon <br>";
    echo "Total yang harus dibayar pelanggan: Rp$hargaPelanggan";
    }
    
//soal
echo "<br><br>"; 
echo "Soal:<br>";
$skorPemain = 490;
if ($skorPemain > 500) {
    echo "Total skor pemain adalah: $skorPemain<br>";
    echo "Apakah pemain mendapatkan hadiah tambahan? YA"; 
    } else {
        echo "Total skor pemain adalah: $skorPemain<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? TIDAK";
    }
?>