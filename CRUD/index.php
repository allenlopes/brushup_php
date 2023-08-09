<?php

$con = mysqli_connect("localhost:3308", "root", "", "phptut");
$res = mysqli_query($con, "SELECT * from student");

?>
<a href="add.php">Add Record</a>
<table border="1">
    <tr>
        <td>S.No</td>
        <td>Name</td>
        <td>City</td>
        <td></td>
    </tr>

    <?php
    $i = 1; while($row = mysqli_fetch_assoc($res)) { ?>
    <tr>
        <td><?php echo $i ?></td>
        <td> <?php echo $row['name'] ?> </td>
        <td> <?php echo $row['city'] ?> </td>
        <td>
            <a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a>&nbsp;
            <a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>
        </td>
    </tr>
    <?php
    $i++;
    } ?>

</table>