<?php
function foo(){
    echo "in foo func"."\n";
}

$varfunc = "foo" ;
$varfunc();


class Foo{
    function variable_fun(){
        $name = "bar";
        $this->$name();
    }
    function bar(){
        echo "this is Foo.bar function";
    }

}

function main(){
    $foo = new Foo();
    $fun_name = "variable_fun";
    $foo->$fun_name();
}
main();