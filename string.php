<?php
$firstName = "Ali";
$lastName = "kareem";
$fullName = $firstName . $lastName;
$fullName = $firstName .' '. $lastName;
$fullName = $firstName .'<br>'. $lastName;
echo $fullName;
echo"<br>";
echo "$firstName $lastName is a nice person";
echo"<br>";
echo '$fullName';//$fullName
echo"<br>";
echo "$fullName";//Ali kareem
echo"<br>";
echo strlen($fullName);
echo"<br>";
echo $firstName[0];
echo"<br>";


$msg = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam id quo totam quisquam laborum,
officia quis adipisci omnis eos atque, eaque qui quibusdam. In adipisci eum nobis recusandae, eveniet voluptatem.";
echo strpos($msg, "is");//44
echo"<br>";
echo strpos($msg, "is",49);//77
echo"<br>";

echo str_replace("is","ay 7aga",$msg);
echo"<br>";

$dummy = "   is    ";
echo strlen($dummy);//9
echo"<br>";
$afterTrim = trim($dummy);
echo strlen($afterTrim);//2
echo"<br>";
$tags="<script>alert('hello')</script>";
echo htmlspecialchars($tags);
echo"<br>";
echo"<br>";
print_r(str_split($msg));//array
echo"<br>";
echo"<br>";
print_r(str_split($msg,10));//array



?>