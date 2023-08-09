<?php
//Inheritance

class class1 {

    function __construct(){
        echo "construct";
    }

    function test1(){
        echo "testing 1...";
    }

    function __destruct(){
        echo "destruct";
    }
}

class class2 extends class1{
    function test2(){
        echo "testing 2...";
        parent:: test1();  // The parent will display the test1() function from class class1
    }
}


$obj = new class2();
$obj->test2();

?>