<?php

/**
 * Class AbstractClass
 * 定义一个抽象类
 */
abstract class AbstractClass{
    //定义抽象类方法方法
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    public function printOut(){
        print $this->getValue() .PHP_EOL;
    }
}

/**
 * Class ConcreteClass1
 * 定义抽象类的实现类1
 */
class ConcreteClass1 extends AbstractClass {
    protected function getValue()
    {
        // TODO: Implement getValue() method.
        return "ConcreteClass1->getValue".PHP_EOL;
    }

    public function prefixValue($prefix)
    {
        return "ConcreteClass1->prefixValue({$prefix})".PHP_EOL;
        // TODO: Implement prefixValue() method.
    }
}

/**
 * Class ConcreteClass2
 * 定义抽象类的实现类2
 */
class ConcreteClass2 extends AbstractClass{
    protected function getValue()
    {
        // TODO: Implement getValue() method.
        return "ConcreteClass2->getValue";
    }

    public function prefixValue($prefix)
    {
        // TODO: Implement prefixValue() method.
        return "ConcreteClass2->prefixValue({$prefix})".PHP_EOL;
    }
}

/**
 * 定义入口方法
 */
function main(){
    $obj1 = new ConcreteClass1();
    $obj1->printOut();
    echo $obj1->prefixValue("FOO_") .PHP_EOL;
    echo "-------------------".PHP_EOL;
    $obj2 = new ConcreteClass2();
    $obj2->printOut();
    echo $obj2->prefixValue("FOO_").PHP_EOL;
}

//调用入入口方法
main();