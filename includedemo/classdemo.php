<?php
function foo(){
    global $color;
    include "vars.php";

    echo "A $color $fruit" . "\n";

}
foo();
//$fruit无法找到，故无法打印出来,且报错
echo "A $color ";