<?php
spl_autoload_register(function ($name){
    echo "want to load $name .\n";
    throw new Exception("unable to load $name .");
});

try{
    $obj = new NonLoadableClass();
}catch (Exception $e){
    echo $e->getMessage(),"\n";
}