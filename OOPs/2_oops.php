<?php
// Constructors and Destructors
class class1 {

    function __construct(){
        echo "construct";
    }

    function __destruct(){
        echo "destruct";
    }
}

$obj = new class1();
// $obj->test();


?>