<?php
echo $file = rand(11111, 99999);
if(isset($_POST['submit'])){
    move_uploaded_file($_FILES['doc']['tmp_name'],'UploadedFiles/'.$_FILES['doc']['name']);
}

?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="doc" />
    <input type="submit" name="submit" />
</form>