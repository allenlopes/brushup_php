<?php

// code


// FOR LOOP


$num = 10;
for($i = 0; $i <= $num; $i++)
{
    echo $i;
    echo '<br>';
}


// for loop table of 2

$num = 10;
for($i = 1; $i <= $num; $i++)
{
    echo "2 * $i = ". 2*$i;
    echo "<br/>";
}




// WHILE LOOP


$num = 11;
$i = 1;
while($i <= $num)
{
    echo "2 * $i = ". 2*$i;
    $i++;
    echo "<br/>";
}



// DO-WHILE LOOP


$i = 1;
$num = 12;
do
{
    echo "2 * $i = ". 2*$i;
    echo "<br/>";
    $i++;
}while($i <= $num)


?>