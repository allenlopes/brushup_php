<?php

$con = mysqli_connect("localhost:3308", "root", "", "phptut");

$id=$_GET['id'];
mysqli_query($con,"DELETE from student where id='$id'");

header('location:index.php');
die();

?>