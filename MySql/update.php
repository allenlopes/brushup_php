<?php

$con = mysqli_connect("localhost:3308", "root", "","phptut");
$sql = "UPDATE student set name='Salluu' WHERE id=4";

mysqli_query($con, $sql);

?>