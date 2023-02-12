<?php
$num = 5;
$price = 99.9;
//100 int  //100.0 float
$name = "Ali";
$arr = ["Ali","kareem","mai"];
$x = null;
$isAdmin = true;
$isUser = false;
$z="5";
echo is_numeric($z);//1
echo"<br>";


echo gettype($num);
echo"<br>";
echo $isAdmin;
echo"<br>";
var_dump($isUser);
echo"<br>";
var_dump($arr);
echo"<br>";
print_r($arr);
echo"<br>";


var_dump(is_string($isAdmin));//flase
echo"<br>";
echo is_array($arr);//1
echo"<br>";
echo is_integer($price);
echo"<br>";
echo is_int($price);
echo"<br>";
echo is_double($price);
echo"<br>";
echo is_float($price);
echo"<br>";
echo is_numeric($price);
echo"<br>";
echo is_string($name);
?>