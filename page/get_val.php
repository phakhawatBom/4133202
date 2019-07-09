<?php
$name = "Phakhawat Chandee";

echo "Hello World !!!";
echo "<br>";
echo $name;

echo sum(10,11);

function sum($A,$B){
    return $A + $B;
}

$user = $_POST['user'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$fav_a = $_POST['fav_a'];
$fav_b = $_POST['fav_b'];
$province = $_POST['province'];

echo $province;
?>