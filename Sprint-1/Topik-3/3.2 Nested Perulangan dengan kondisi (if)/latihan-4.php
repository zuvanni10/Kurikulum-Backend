<?php

for ($y=1; $y <= 9; $y++) { 
    for ($z=1; $z <= 9; $z++) {
        if ($y == 9 || $y >= 5 && $z == 9 || $y == 5 || $y < 5 && $z == 1 || $y == 1) {
            echo "&nbsp+";
        } else {
            echo "&nbsp&nbsp-&nbsp";
        }
    }
    echo "<br>";
}