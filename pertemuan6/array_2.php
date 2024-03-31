<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="styleArray_2.css">
</head>
<body>

<?php
    // Mendefinisikan sebuah array asosiatif yang berisi informasi tentang seorang dosen
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis kelamin' => 'Perempuan'];

    // Mencetak informasi nama dosen dengan menggunakan indeks 'nama', 'domisili, 'jenis_kel' dari array list Dosen 
    echo "<table>";
    echo "<tr><th>Informasi Dosen</th><th>Data</th></tr>";
    foreach ($Dosen as $key => $value) {
        echo "<tr><td>$key</td><td>$value</td></tr>";       
    }
    echo "</table>";
?>
</body>
</html>