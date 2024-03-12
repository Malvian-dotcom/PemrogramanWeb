<?php
//membuat variabel a dan b untuk penggunaan operator
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil penjumlahan: " . $hasilTambah . "<br>";
echo "Hasil pengurangan: " . $hasilKurang . "<br>";
echo "Hasil perkalian: " . $hasilKali . "<br>";
echo "Hasil pangkat: " . $pangkat . "<br>";
echo "Hasil pembagian: " . $hasilBagi . "<br>";
echo "Sisa pembagian: " . $sisaBagi . "<br> <br>";

//menambahkan kode operator pembanding
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihSama = $a >= $b;

echo "Apakah a sama dengan b?" . ($hasilSama ? "Ya" : "Tidak") . "<br>";
echo "Apakah a tidak sama dengan b?" . ($hasilTidakSama ? "Ya" : "Tidak") . "<br>";
echo "Apakah a lebih kecil dari b?" . ($hasilLebihKecil ? "Ya" : "Tidak") . "<br>";
echo "Apakah a lebih besar dari b?" . ($hasilLebihBesar ? "Ya" : "Tidak") . "<br>";
echo "Apakah a lebih kecil atau sama dengan b?" . ($hasilLebihKecil ? "Ya" : "Tidak") . "<br>";
echo "Apakah a lebih besar atau sama dengan b?" . ($hasilLebihBesar ? "Ya" : "Tidak") . "<br> <br>";

//menambahkan kode operator logika
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil dari operasi logika AND: " . ($hasilAnd ? "true" : "false") . "<br>";
echo "Hasil dari operasi logika OR: " . ($hasilor? "true" : "false"). "<br>";
echo "Hasil dari operasi logika NOT pada a: " . ($hasilNotA ? "true" : "false"). "<br>";
echo "Hasil dari operasi logika NOT pada b: " ($hasilNotB? "true" : "false"). "<br><br>";

//menambahkan kode operator penugasan
$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

echo "Nilai a setelah ditambah dengan b: " . $a . "<br>";
echo "Nilai a setelah dikurangi dengan b: " . $a . "<br>";
echo "Nilai a setelah dikali dengan b: " . $a . "<br>";
echo "Nilai a setelah dibagi dengan b: " . $a . "<br>";
echo "Sisa hasil pembagian dengan b: " . $a . "<br><br>";

//menambahkan kode operator identik
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Apakah a identik dengan b? " . ($hasilIdentik ? "Ya" : "Tidak") . "<br>";
echo "Apakah a tidak identik dengan b? " . ($hasilTidakIdentik ? "Ya" : "Tidak") . "<br> <br>";

//Soal cerita
echo "Soal Cerita: <br>";
$kursiResto = 45;
$pelanggan = 28;

$kursiKosong = $kursiResto - $pelanggan;
$hasil = ($kursiKosong/$kursiResto) * 100;

echo "Persentasi kursi kosong di resto" . $hasil . "%";
?>