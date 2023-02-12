<?php
define("GREETING","Hello users");
echo GREETING;
echo"<br>";
//////////////////////
const x=3;
echo x;
echo"<br>";
//////////////////////
define('z',4);
echo z;
echo"<br>";
////////////////
$y=4;
define('n', 4+$y);
echo n;
echo"<br>";
////////////////////////////
echo __LINE__ ."<br>";
echo __FILE__ ."<br>";
echo __DIR__ ."<br>";
//echo __CLASS__ ."<br>";
echo PHP_VERSION ."<br>";
echo PHP_OS_FAMILY ."<br>";
echo"<br>";

function test(){
    echo __FUNCTION__; 
}
test();
?>