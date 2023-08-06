<?php


///////// NON - PARAMETERIZED FUNCTION /////////////


//

function add(){
    echo "Hello";
}
add();


//

function add(){
    echo 10;
}
$x = add();
echo $x+20;


//

function add(){
    return 10;
}
$x = add();
echo $x+20;



//////////// PARAMETERIZED FUNCTION ////////////

//

function add($x, $y)
{
    echo $x+$y;
}
add(10, 20);



//
function add($x, $y = 0)
{
    echo $x+$y;
}
add(10);



//
function add($x, $y = 5)
{
    echo $x+$y;
}
add(10);



///////// SCOPE OF VARIABLE /////////


//

$x = 20; // This function is outside the add() function. So it hasn't any scope in that function, to solve this we need to define $x in that function itself.
function add(){
    echo $x;
}
add();



//
$x = 20;
function add(){
    $x = 55;
    echo $x;
}
add(); // This add() function call will print the value of $x inside the function add();

echo '<br/>';
echo $x; // This $x will print the value of $x = 20, which was defined before the function add();



//

$x = 20; // If we want to anyhow use this $x value inside out function add() then we need to define it as 'global $x' inside the function add()
function add(){
    global $x; // The global $x will take the value of $x which is defined outside the add() function.
    echo $x;
}

add();



//
$x = 30;
function add()
{
    global $x;
    $x = 55; // We have took the value of $x = 30 by defining the global but here we have defined the value of '$x = 55', so it will take the new value of $x and echo it and not the old value.
    echo $x;
}

add();

?>