<?php

$con = mysqli_connect("localhost:3308", "root", "", "phptut");

$id = $_GET['id'];

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $city = $_POST['city'];
    mysqli_query($con, "UPDATE student set name='$name', city='$city' where id='$id'");
    header('location:index.php');
    die();
}


$res = mysqli_query($con, "SELECT * from student where id='$id'");
$row = mysqli_fetch_assoc($res);
$name = $row['name'];
$city = $row['city'];

?>

<form method="post">
    <table>
        <tr>
            <td>Name</td>
            <td> <input type="textbox" name="name" value="<?php echo $name?>" /> </td>
        </tr>

        <tr>
            <td>City</td>
            <td> <input type="textbox" name="city" value="<?php echo $city?>" /> </td>
        </tr>

        <tr>
            <td></td>
            <td> <input type="submit" name="submit" /> </td>
        </tr>

    </table>

</form>