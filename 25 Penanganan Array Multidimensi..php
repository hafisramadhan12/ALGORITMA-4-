<?php
$matriks = array(
   array(1, 2, 3),
   array(4, 5, 6),
   array(7, 8, 9),
   array(10, 11, 12)
);

foreach ($matriks as $baris) {
    foreach ($baris as $nilai) {
        echo $nilai . " ";
    }
    echo "<br>";
}

print_r("<p><strong><i>By M HAFIDZ RAMADHAN NST!</strong>");
