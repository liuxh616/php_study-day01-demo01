<?php

$i = 0;
while (++$i){
    switch ($i){
        case 5:{
            echo "At 5<br/>\n";
            echo $i ."\n";
            break 1;
        }
        case 10:{
            echo "At 10<br/>\n";
            echo $i ."\n";
            break 2;
        }
        default:
            echo $i ."\n";
            break 1;
    }
}