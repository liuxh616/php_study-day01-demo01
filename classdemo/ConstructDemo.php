<?php

/**
 * Class BaseClass
 * 定义父类的构造函数
 */
class BaseClass {
    function __construct()
    {
        print "in baseClass Construct \n";
    }
}

/**
 * Class SubClass
 * 子类中若要调用父类的构造造函数，需使用parent::__construct();调用
 * 若没有则会覆盖父类的构造函数
 */
class SubClass extends BaseClass{
    function __construct()
    {
        parent::__construct();
        print "in SubClass Construct .\n";
    }
}

/**
 * Class OtherSUbClass
 * 子类默认继承父类的构造函数
 */
class OtherSUbClass extends BaseClass {


}

function main(){
    $obj1 = new BaseClass();
    echo "-----------------------------\n";
    $obj1 = new SubClass();
    echo "-----------------------------\n";
    $obj1 = new OtherSUbClass();
}
main();
