<?php
spl_autoload_register(function ($name){
    var_dump($name);
});

class Foo implements ITest{
    function test()
    {
        // TODO: Implement test() method.
        echo "test method ";
    }
}

function main(){
//    Foo::test();
    $foo = new Foo();
    $foo->test();
}
main();


