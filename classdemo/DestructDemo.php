<?php
class BaseClass{
    function __construct()
    {
        echo "this is construct method"."\n";
        $this->name = "BaseClass";

    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "----------------------\n";
        echo "this is destruct method"."\n";
        echo "Destroying " . $this->name . "\n";

    }
}

function main(){
    $obj = new BaseClass();

}
main();