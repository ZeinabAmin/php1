<?php
$cars = array("Volvo", "BMW", "Toyota", "10", 70, 30, 40, 2);
//sort($cars); //sort($cars,SORT_REGULAR);

// Array
// (
//     [0] => 2
//     [1] => 10
//     [2] => 30
//     [3] => 40
//     [4] => 70
//     [5] => BMW
//     [6] => Toyota
//     [7] => Volvo
// )

//sort($cars,SORT_STRING);

// Array
// (
//     [0] => 10
//     [1] => 2
//     [2] => 30
//     [3] => 40
//     [4] => 70
//     [5] => BMW
//     [6] => Toyota
//     [7] => Volvo
// )

echo "<pre>";
print_r($cars);
echo "</pre>";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
////////////////////////////////////////////
$cars1 = array("Volvo", "BMW", "Toyota", "10", 70, 30, 40, 2);

//rsort($cars1); //rsort($cars,SORT_REGULAR);


// Array
// (
//     [0] => Volvo
//     [1] => Toyota
//     [2] => BMW
//     [3] => 70
//     [4] => 40
//     [5] => 30
//     [6] => 10
//     [7] => 2
// )


//rsort($cars1,SORT_STRING);

// Array
// (
//     [0] => Volvo
//     [1] => Toyota
//     [2] => BMW
//     [3] => 70
//     [4] => 40
//     [5] => 30
//     [6] => 2
//     [7] => 10
// )


echo "<pre>";
print_r($cars1);
echo "</pre>";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
////////////////////////////////////////////
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

//rsort($age);
// Array
// (
//     [0] => 43
//     [1] => 37
//     [2] => 35
// )


//asort($age);////asort($age,SORT_REGULAR);
// Array
// (
//     [Peter] => 35
//     [Ben] => 37
//     [Joe] => 43
// )


//arsort($age);
// Array
// (
//     [Joe] => 43
//     [Ben] => 37
//     [Peter] => 35
// )


echo "<pre>";
print_r($age);
echo "</pre>";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
////////////////////////////////////////////
$age1 = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
//ksort($age1);
// Array
// (
//     [Ben] => 37
//     [Joe] => 43
//     [Peter] => 35
// )


//krsort($age1);
// Array
// (
//     [Peter] => 35
//     [Joe] => 43
//     [Ben] => 37
// )



echo "<pre>";
print_r($age1);
echo "</pre>";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


?>
