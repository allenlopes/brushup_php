<?php

$con = mysqli_connect("localhost:3308", "root", "","phptut");
$sql = "DELETE from student where id=4";

mysqli_query($con, $sql);

?>