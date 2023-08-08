<?php

if(isset($_POST['submit'])){
    echo "<pre>";
    print_r($_FILES); // It is used to show the submitted file or uploaded file in the form of array.
}

?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="doc" />
    <input type="submit" name="submit" />
</form>