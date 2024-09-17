<?php
// membuat array 2 dimensi yang berisi array asosiatif
$artikel = [
    [
        "judul" => "Belajar PHP & MySQL untuk Pemula",
        "penulis" => "m hafidz ramadhan"
    ],
    [
        "judul" => "Tutorial PHP dari Nol hingga Mahir",
        "penulis" => "m hafidz ramadhan"
    ],
    [
        "judul" => "Membuat Aplikasi Web dengan PHP",
        "penulis" => "m hafidz ramadhan"
    ]
];

// menampilkan array
foreach($artikel as $post){
    echo "<h2>".$post["judul"]."</h2>";
    echo "<p>".$post["penulis"]."<p>";
    echo "<hr>";
}

echo "<p><strong><i>By HAFIS RAMADHAN</strong>";
