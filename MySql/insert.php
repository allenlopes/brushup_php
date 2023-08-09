<?php

$con = mysqli_connect("localhost:3308", "root", "","phptut");
$sql = "insert into student(name, city) values('Lopes', 'Bangalore')";

mysqli_query($con, $sql);

?>