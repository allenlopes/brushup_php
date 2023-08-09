<?php

$con = mysqli_connect("localhost:3308", "root", "","phptut");
$sql = "SELECT * from student";

$resource = mysqli_query($con, $sql); // Jo bhi output hai woh $resource naam ke variable mai daalke dedo.

while($row=mysqli_fetch_assoc($resource)){
    echo '<pre>';
    print_r($row); // ye ham logo ko array ke type mai database ka data dhika dega jab ham select.php run karenge
}

?>