<?php

echo '<pre>';
print_r($_GET);

?>

<form method="get">
    <input type="text" name="city" />
    <input type="submit" name="submit" />
</form>


## OR


<?php

echo '<pre>';
print_r($_POST);

?>

<form method="post">
    <input type="text" name="city" />
    <input type="submit" name="submit" />
</form>