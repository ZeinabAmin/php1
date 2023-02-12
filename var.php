<?php
$x=5;
define("GREETING","Hello users");
echo $x;
echo"<br>";
echo GREETING;
echo"<br>";
$x=7;
echo $x;
echo"<br>";
///////////////////////////////////////////
//type juggling

$r=5;
$g="6";
$d=$r+$g;
echo $d; //11
echo"<br>";
///////////////
$u=5;
$p="3Ali";
$b=$u+$p;
echo $b; //Warning: A non-numeric value encountered in C:\xampp\htdocs\php1\var.php on line 22
//8
echo"<br>";
/////////////

$name='Ali';
$age=26;
echo $name.$age; //Ali26 //string
echo"<br>";
//////////
$name2='kareem';
$age=true;
echo $name2.$age; //kareem1 //string
echo"<br>";

?>