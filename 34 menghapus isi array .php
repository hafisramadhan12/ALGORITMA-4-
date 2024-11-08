<?php

// membuat array
$hewan = [
    "Burung",
    "Kucing",
    "Ikan"
];

// menghapus kucing
unset($hewan[1]);

echo $hewan[0]."<p>";
echo $hewan[2]."<br>";

echo "<hr>";

echo "<pre>";
print_r($hewan);
echo "</pre>";

echo "<p><strong><i>HAFIS RAMADHAN</strong>";
