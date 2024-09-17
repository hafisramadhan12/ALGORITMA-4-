<?php
for ($i = 0; $i < 5; $i++) {
    echo "i: $i ";
    for ($j = 0; $j < 5; $j++) {
        if ($j == 2) {
            continue 2; // Melanjutkan pada level loop kedua
        }
        echo "j: $j ";
    }
    echo "\n";
}

echo "<p><strong><i>By HAFIS RAMADHAN</strong>";