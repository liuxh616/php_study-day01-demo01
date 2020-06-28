<?php

/**
 * Trait HelloWorld
 * 定义一个trait代码块
 */
trait HelloWorld{
    public  function  sayHello(){
        echo "trait...hello world";
    }
}

/**
 * Class MyTraitClass
 * 定义使用trait方法类
 */
class MyTraitClass{
    use HelloWorld;
    public function sayHello(){
        echo "MyTraitClass....hello world";
    }
}

/**
 * 定义入口函数
 */
function main(){
    $o = new MyTraitClass();
    $o->sayHello();
}

main();