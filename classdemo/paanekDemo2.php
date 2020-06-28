<?php
/**
 * 范围解析操作符 （::）的使用
 * ----------在类定义内部使用 ::
 *
 */
include "paanekDemo.php";
class SubPaaClass extends PaaClass{
    public static $my_static = "static var ";
    public static function doubleColon(){
        echo parent::CONST_VALUE . PHP_EOL;
        echo self::$my_static . PHP_EOL;
    }
}
function main(){
    $className = "SubPaaClass";
    echo $className::doubleColon();
    echo "--------------------".PHP_EOL;
    SubPaaClass::doubleColon();
}
main();