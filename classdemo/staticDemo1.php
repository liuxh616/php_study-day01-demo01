<?php
class FooStatic{
    public static $my_static = "foo static var";

    public function getStaticVar(){
        return self::$my_static;
    }
}
class SunFoo extends FooStatic{
    public function getParentStaticVar(){
        return parent::$my_static;
    }

}

function main(){
    print FooStatic::$my_static .PHP_EOL;

    $foo = new FooStatic();
    print $foo->getStaticVar() .PHP_EOL;
    print $foo->my_static .PHP_EOL;  //不能通过对象访问静态变量
    print $foo->getStaticVar() .PHP_EOL;

    print "-----------------".PHP_EOL;
    print SunFoo::$my_static. PHP_EOL;
    $sun = new SunFoo();
    print $sun->getParentStaticVar();

}

main();