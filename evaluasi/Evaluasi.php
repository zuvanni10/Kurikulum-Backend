<?php

for($y = 1; $y <= 9; $y++){
    for($z = 1; $z <= 9; $z++) {
        if($z == 9 || $z < 8 && $z < 6|| $z == 7 ){
            echo "+";
        } else {
            echo "-";
        }
    }
    echo "\n";
}