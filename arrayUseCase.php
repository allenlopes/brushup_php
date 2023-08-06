<?php

$arrCity = array("Delhi", "Agra", "Pune", "Mumbai");
sort($arrCity);

// Printing the values in the array using For Loop:
$arrCity1 = array("Delhi", "Agra", "Pune", "Mumbai");
for($i=0; $i < count($arrCity); $i++)
{
    echo $arrCity[$i];
    echo "<br>";
}


?>

# Before - without using any function:
<br />
<select>
    <option>Select City</option>
    <option>Delhi</option>
    <option>Agra</option>
    <option>Pune</option>
</select>

<br />
<br />

# After - Sorting using Array Functions:
<br />
<select>
    <option>Select City</option>
    <?php
    foreach($arrCity as $list)
    {
        echo "<option>$list</option>";
    }
    ?>
</select>




