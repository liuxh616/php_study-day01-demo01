<?php
class Foo{
    public function pringItem($string){
        echo "Foo:" . $string .PHP_EOL;
    }

    public function  pringPHP(){
        echo "PHP is great " . PHP_EOL;
    }
}

class Sun extends Foo{
    public function pringItem($string)
    {
//        parent::pringItem($string); // TODO: Change the autogenerated stub
        echo "Sun:" . $string .PHP_EOL;
    }
}

function main(){
    $foo = new Foo();
    $sun = new Sun();
    $foo->pringItem("baz");
    $foo->pringPHP();
    $sun->pringItem("baz");
    $sun->pringPHP();
}
main();