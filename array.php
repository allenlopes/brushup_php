<?php


/////////////////// Index Array ///////////////////////

//

$arr = array(10, 20);
echo '<pre>';
print_r($arr);



//

$arr1 = array("Vishal","Amit","Bhavit");
foreach($arr1 as $list) {
    echo $list;
    echo "<br/>";
}



//

$arr2 = array("All", "Sall", "Loo");
foreach($arr2 as $key=>$val){
    echo $key;
    echo " ";
    echo $val;
    echo "<br>";
}


//

$arr2 = array("All", "Sall", "Loo");
echo $arr2['1'];



/////////////////// Associative Array ///////////////////////

//

$arr = array("name"=>"Vishal", "city"=>"Delhi");
echo '<pre>';
print_r($arr);



//

$arr = array("name"=>"Vishal", "city"=>"Delhi");
foreach($arr as $list){
    echo $list;
    echo "<br />";
}


//

$arr = array("name"=>"Vishal", "city"=>"Delhi");
foreach($arr as $key => $val){
    echo $key;
    echo " ";
    echo $val;
    echo "<br />";
}


//

$arr = array("name"=>"Vishal", "city"=>"Delhi");
echo $arr['name'];


?>