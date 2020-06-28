<?php
class Base{
    public  function  sayHello(){
        echo "hello";
    }
}

trait SayHello{
    function sayHello(){
        parent::sayHello();
        echo " world";
    }
}
class MyHelloWorld extends Base{
    use SayHello;
}
function main(){
    $o = new MyHelloWorld();
    $o->sayHello();
}
main();
