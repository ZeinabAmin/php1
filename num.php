<?php
$price = 99.9;
echo 234;
echo"<br>";
echo ceil($price) . "<br>"; //100
echo floor($price) . "<br>"; //99
echo round($price) . "<br>"; //100


echo(ceil(0.60) . "<br>"); //1
echo(ceil(0.40) . "<br>"); //1
echo(ceil(5) . "<br>"); //5
echo(ceil(5.1) . "<br>"); //6
echo(ceil(-5.1) . "<br>"); //-5
echo(ceil(-5.9)); //-5


echo"<br>";

echo(round(5.5) . "<br>"); //6
echo(round(5.3) . "<br>"); //5
echo(round(5.7) . "<br>"); //6
echo(round(5.4) . "<br>"); //5
echo(round(-4.60)); //-5
?>