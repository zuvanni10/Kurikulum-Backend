<?php

for ($y = 1; $y <= 9; $y++) {
    for ($z = 1; $z <= 9; $z++) {
        if ($y + $z == 10 || $y + $z > 10) {
            echo "&nbsp+";
        } else {
            echo "&nbsp&nbsp-&nbsp";
        }
    }
    echo "<br>";
}