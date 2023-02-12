<?php
// array_merge();
// array_reverse();
// shuffle();
// array_search();
// in_array();
// array_key_exists();
// array_push();
// array_pop();
// array_shift();
// array_unshift();
// array_intersect();
// array_replace();
// array_slice();
// array_splice();
// array_keys();
// array_values();
// count();
// sizeof();
// array_unique();
// extract($my_array);
// array_filter();
// compact();


$a1 = array("red", "green");
$a2 = array("blue", "yellow");
print_r(array_merge($a1, $a2));
echo "<br>";
//Array ( [0] => red [1] => green [2] => blue [3] => yellow )
var_dump($a1 !== $a2); //bool(true)
echo "<br>";

//////////////////////////
$num1 = [1, 3, 6];
$num2 = [1, 5, 9, 10];

$numsResult = $num1 + $num2;
print_r($numsResult);
echo "<br>";
// Array ( [0] => 1 [1] => 3 [2] => 6 [3] => 10 )

//////////////////////////
$a = array("a" => "Volvo", "b" => "BMW", "c" => "Toyota");
print_r(array_reverse($a));
// Array ( [c] => Toyota [b] => BMW [a] => Volvo )
echo "<br>";

//////////////////////////
$my_array = array("red", "green", "blue", "yellow", "purple");
shuffle($my_array);
print_r($my_array);
// Array ( [0] => purple [1] => yellow [2] => blue [3] => green [4] => red )
echo "<br>";

//////////////////////////
$a = array("a" => "red", "b" => "green", "c" => "blue");
echo array_search("red", $a);
// a //index or key
echo "<br>";
//$array=array_search("red", $a);
//echo $array;  //a
//////////////////////////
$people = array("Peter", "Joe", "Glenn", "Cleveland",6);
if (in_array("Glenn", $people)) {
    // if (in_array("6", $people,true)) {//must be identical
    echo "Match found";
} else {
    echo "Match not found";
}
// Match found
echo "<br>";
//$arr=in_array("Glenn", $people);
//echo $arr; //1 
echo "<br>";
//////////////////////////
$a = array("Volvo" => "XC90", "BMW" => "X5");
if (array_key_exists("Volvo", $a)) {
    echo "Key exists!";
} else {
    echo "Key does not exist!";
}
// Key exists!
echo "<br>";

//////////////////////////
$a = array("Volvo" => "XC90", "BMW" => "X5", "Toyota" => "Highlander");
print_r(array_keys($a));
// Array ( [0] => Volvo [1] => BMW [2] => Toyota )
echo "<br>";

//////////////////////////
$a = array("red", "green", "blue");
array_pop($a);
print_r($a);
// Array ( [0] => red [1] => green )
echo "<br>";
$lasta=array_pop($a);
echo $lasta; //green
echo "<br>";
//////////////////////////
$a = array("red", "green");
array_push($a, "blue", "yellow");
print_r($a);
// Array ( [0] => red [1] => green [2] => blue [3] => yellow )
echo "<br>";

//////////////////////////
$a = array("a" => "red", "b" => "green", "c" => "blue");
echo array_shift($a);
print_r($a);
// redArray ( [b] => green [c] => blue )
echo "<br>";
$firsta=array_shift($a);
echo $firsta;//green
echo "<br>";

//////////////////////////
$f=array("a"=>"red","b"=>"green");
array_unshift($f,"blue");
print_r($f);
//Array ( [0] => blue [a] => red [b] => green )
echo "<br>";

//////////////////////////
$a = array("red", "green", "blue", "yellow", "brown");
print_r(array_slice($a, 2));
// Array ( [0] => blue [1] => yellow [2] => brown )
echo "<br>";

//////////////////////////
$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("a" => "purple", "b" => "orange");
array_splice($a1, 0, 2, $a2);
print_r($a1);
// Array ( [0] => purple [1] => orange [c] => blue [d] => yellow )
echo "<br>";

//////////////////////////
$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("e" => "red", "f" => "green", "g" => "blue");

$result = array_intersect($a1, $a2);
print_r($result);
// Array ( [a] => red [b] => green [c] => blue )
echo "<br>";

//////////////////////////
$cars=array("Volvo","BMW","Toyota");
echo count($cars);//3
echo "<br>";
//////////////////////////
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_replace($a1,$a2));
//Array ( [0] => blue [1] => yellow )
echo "<br>";
//////////////////////////
$a=array("a"=>"red","b"=>"green","c"=>"red");
print_r(array_unique($a));
//Array ( [a] => red [b] => green )
echo "<br>";     
//////////////////////////
$a = "Original";
$my_array = array("a" => "Cat","b" => "Dog", "c" => "Horse");
extract($my_array);
echo "\$a = $a; \$b = $b; \$c = $c";
//$a = Cat; $b = Dog; $c = Horse
echo "<br>";
//////////////////////////
$firstname = "Peter";
$lastname = "Griffin";
$age = "41";

$result = compact("firstname", "lastname", "age");

print_r($result);
//Array ( [firstname] => Peter [lastname] => Griffin [age] => 41 )
echo "<br>";
//////////////////////////
