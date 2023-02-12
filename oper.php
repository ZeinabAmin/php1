<?php
echo 2**3;//8
echo"<br>";

$x = 3;
$x += 4;
echo $x; //7
echo"<br>";

$y = 9;

echo $x != $y;//1 true
echo"<br>";

echo $x <> $y;//1 true
echo"<br>";

$z = 7;
var_dump($x <> $z);//false
echo"<br>";

$z = "7";
echo $x == $z;//1 true
echo"<br>";


/////////////////////////////////////
$r=8;$d=4;
echo $r <=> $d;//1 true
echo"<br>";

/////
$r=2;$d=4;
echo $r <=> $d;//-1 false
echo"<br>";

///////////
$r=4;$d=4;
echo $r <=> $d;//0 =
echo"<br>";

/////////////////////////////////////////

$x = 3;
echo ++$x; //4
echo"<br>";

/////////
$x = 5;
echo $x++; //5
echo"<br>";

//////
$x =3;
$y= $x++; 
echo $y;//3
echo"<br>";
echo $x;//4
///////
echo"<br>";

$z = 7;
echo $z++;//7
echo"<br>";
echo $z;//8
echo"<br>";

///////////////////
echo 10 < 100; //true
echo"<br>";

echo 0;//0 int
echo"<br>";

echo false; //nothing
echo"<br>";

/////////////

$f=100;

if($f !== 90)
{
    echo 'hello';
}
//hello
echo"<br>";

///////////////
echo (true and true); //1
echo"<br>";

echo (true or false); //1
echo"<br>";

echo (true xor true); //false   not both true
//////////////////////////////

echo"<br>";

$txt1="hello";
$txt2="world";
$txt1 .= $txt2;

echo $txt1;//hello world
///////////////////////////////////



?>