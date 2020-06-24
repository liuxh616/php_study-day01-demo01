<?php
function test(){
    static $count = 0;
    $count ++;
    echo @$count;
    echo "\n";
    if($count <10){
        test();
    }
    else{
//        $count--;
        return;
    }
}
test();
