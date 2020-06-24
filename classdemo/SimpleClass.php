<?php
class SimpleClass{
    public $var = "a default values";

    public  function  displayVar(){
        echo $this->var;

    }
}
function main(){
    $instance = new SimpleClass();
    $assigned = $instance;
    $reference = & $instance;

    $instance->var = "\$assigned will have thid value ";
    $instance = null ;
    var_dump($instance);
    var_dump($reference);
    var_dump($assigned);
}
main();