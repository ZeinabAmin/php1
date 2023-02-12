<?php
$numericArr=[1,4,6,6,7,5];
$assArray = [
    "name" => "ahmed",
    "age" => 18,
    "salary" => 5000
];

echo $numericArr[0];
echo"<br>";
echo $assArray["name"];
echo"<br>";
//array_push();
print_r($numericArr);
echo"<br>";
$numericArr[] = 2000;
print_r($numericArr);
unset($numericArr[3]);//delete with index
echo"<br>";
print_r($numericArr);
echo"<br>";
$assArray['age'] = 50;//update
$assArray["gender"] = "male";
print_r($assArray);
echo"<br>";
unset($assArray['age']);
echo"<br>";
print_r($assArray);
echo"<br>";
echo array_search(1, $numericArr)."<br>";//0 int index

echo array_search("ahmed", $assArray)."<br>";//name

var_dump(array_search("ali", $assArray))."<br>";//bool(false)

echo array_key_exists("name", $assArray)."<br>";//1

$a = [3, 8];
echo array_sum($a);
echo"<br>";

sort($numericArr);
var_dump($numericArr);


?>