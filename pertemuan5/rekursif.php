<?php
function tampilkanHaloDunia(){ 
    echo "Halo dunia! ";
    
    tampilkanHaloDunia();
}
tampilkanHaloDunia();

for($i=1;$i<=25;$i++){
    echo "Perulangan ke-{$i} <br?>";
}

function tampilkanAngka(int $jumlah, int $indeks = 1) {
    echo "Perulangan ke-{$indeks}<br/>";

    if($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);
    }
}
tampilkanAngka(20);

$menu = [
        [
        "nama" => "Beranda"
        ],
        [
            "nama" => "Berita", 
            "subMenu" => [
            [
                "nama" => "Wisata", 
                "subMenu" => [
                [
                "nama" => "Pantai"
                ],
                [
                "nama" => "Gunung"
                ]
            ]
        ],
        [
        "nama" => "Kuliner"
        ],
        [
        "nama" => "Hiburan"
        ]
    ]
],
[
"nama" => "Tentang"
],
[
"nama" => "Kontak"
],
];

function tampilkanMenuBertingkat (array $menu,  $indentation = "") {
    echo "<ul>";
    foreach ($menu as $item) { 
        //echo "<li>{$indentation}{$item['nama']}</li>";
        echo "<li>{$indentation}{$item['nama']}</li>";
        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu'], "{$indentation}　"); 
        }
    }
    echo "</ul>";
}

tampilkanMenuBertingkat ($menu);
 ?>