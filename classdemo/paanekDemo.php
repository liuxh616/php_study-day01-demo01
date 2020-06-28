<?php

/**
 * Class PaaClass
 * 范围解析操作符 （::）的使用
 * ------在类的外部使用 :: 操作符
 */
class PaaClass{
    const CONST_VALUE = "a constant value";
}
function main1(){
//    $classname = "PaaClass";
//    echo $classname::CONST_VALUE . PHP_EOL;
//    echo PaaClass::CONST_VALUE . PHP_EOL;
}
main1();
