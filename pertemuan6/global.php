<?php
// Mendefinisikan dua variabel global $x dan $y, dengan nilai 75 dan 25.
$x = 75;
$y = 25;

// Mengoperasikan variabel global $x dan $y menggunakan array $GLOBALS kemudian disimpan dalam variabel global $z
function addition(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z;
?>