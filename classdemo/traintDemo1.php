<?php
trait ezcComplexFun{
    function getMethod(){
        echo "ezcComplexFun->getMethod".PHP_EOL;

    }
    function getMethod2(){
        echo "ezcComplexFun->getMethod2".PHP_EOL;
    }
}

class TraintClass {
    use ezcComplexFun;
//    function __construct($class, $name)
//    {
//        parent::__construct($class, $name);
//    }

    function testMethod(){
        $this->getMethod();
        $this->getMethod2();
    }
}
class TraintClassFun {
    use ezcComplexFun;
}

function main(){
    $obj1 = new TraintClass();
    $obj1->testMethod();
}
main();