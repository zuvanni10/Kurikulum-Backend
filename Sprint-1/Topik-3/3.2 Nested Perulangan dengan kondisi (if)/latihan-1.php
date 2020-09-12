<?php

for ($y = 1; $y <= 9; $y++) {
    for ($z = 1; $z <= 9; $z++) {
        if ($y == $z || $y > $z) {
            echo "+";
        } else {
            echo "&nbsp-&nbsp";
        }
    }
    echo "<br>";
}