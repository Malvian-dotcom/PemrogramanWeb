<?php
//Membuat array nilaisiswa
$nilaisiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilailulus = [];
foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilailulus[] = $nilai;
    }
}
echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilailulus);

//Menambahkan array dua nilai
echo "<br><br>";
$daftarkaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarkaryawan as $karyawan) { 
    if ($karyawan [1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}
echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ', $karyawanPengalamanLimaTahun);

//membuat setiap nilai array 2 nilai dengan nama mahasiswa dan nilai matakuliah
echo "<br><br>";
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78]
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
    ],
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
};

//soal
echo "<br> <br>";
$daftarNilai = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];

// Menghitung jumlah siswa dan total nilai kelas
$totalNilai = 0;
$jumlahSiswa = 0;
foreach ($daftarNilai as $nilai) {
    $jumlahSiswa++;
    $totalNilai += $nilai [1];
}

//menghitung daftar nilai siswa diatas rata-rata
    echo "Daftar nilai siswa yang mencapai nilai di atas rata-rata kelas: <br>";
    foreach ($daftarNilai as $nilai) {
        if ($nilai[1] > $rataRataKelas) {
            echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
        }
    }
?>