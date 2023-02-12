<?php

//1
$hexMessage = '596f7520636f6e76657274656420697420636f72726563746c7921';
echo hex2bin($hexMessage);
echo '<br>';

//2
$htmlContent = "<h1>PHP track</h1><p>PHP is an interpreted language</p>";
echo strip_tags($htmlContent);
echo '<br>';
echo htmlspecialchars($htmlContent);
echo '<br>';

//3
$username = "  Kareem Fouad ";
$usernameaftertrim = trim($username);
echo strlen( $usernameaftertrim );
echo '<br>';

//4
$num = 15023198.91;
echo number_format($num , 2);
echo '<br>';
echo number_format($num);
echo '<br>';

//5
$employeePositions = [
    'kareem fouad' => 'backend',
    'ahmed bahnasy' => 'frontend',
    'mohammed nabeel' => 'android',
];

$employees = array_keys($employeePositions);
$positions = array_values($employeePositions);

echo"<pre>";
var_dump($employees);
echo"</pre>";


echo '<br>';

var_dump($positions);
echo '<br>';


//6
$nums = [4, 7, 1];
list($x, $y , $z) = $nums;
//$nums = [4, 7, 1];
//[$x, $y , $z] = $nums;
echo $x;
echo '<br>';
echo $y;
echo '<br>';
echo $z;
echo '<br>';

//7
$userData = [
    'name' => 'kareem',
    'job' => 'backend',
    'language' => 'php',
    'framework' => 'laravel',
];


 extract($userData);

 echo $name ;
 echo '<br>';

 echo  $job ;
 echo '<br>';

 echo $language ;
 echo '<br>';

 echo $framework;


?>