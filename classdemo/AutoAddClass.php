<?php
/**
 * 这段代码就是自动加载当前文件夹下的类
 */
spl_autoload_register(function ($class_name){
    require_once $class_name . ".php";
});

/**
 * 实例化类Myclass1
 */
function main(){
    $obj = new Myclass1();
    echo $obj->var1;
}

/**
 * 执行入口方法
 */
main();