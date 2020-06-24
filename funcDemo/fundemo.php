<?php
/**
 * 可变长度变量函数的应用,需在PHP 5.6+之后才可以用
 * @param mixed ...$numbers
 * @return int|mixed
 */
function sum(...$numbers){
    $acc = 0;
    foreach ($numbers as $num ){
        $acc += $num;
    }
    return $acc;
}
echo sum(1,2,3,4,5);