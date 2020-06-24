<?php
/**
 * 自动加载类文件的示例
 */
spl_autoload_register(function ($class_name){
    require_once  $class_name . '.php';
});
$obj1 = new Myclass1();
$obj2 = new Myclass2();
echo $obj1->var1;
echo $obj2->var2;