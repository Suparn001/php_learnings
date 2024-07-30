<?php
// " " -> is used for strings
$x = "hello"; // here $x is string
$y = "567"; // here if numeric value is under the commas therefore  $y is string
$z = 678; //  now $z is numberic value of type int
$xy = 89.90; //  since decimal is used here therefore $xy is of data type float

/* now to check the data type of variubales var_dump() is used . this basically print the data types along
with the values stored in this*/
 echo var_dump($x)."<br>";
 echo var_dump($y)."<br>";
 echo var_dump($z)."<br>";
 echo var_dump($xy)."<br>";
 
$a = true;
var_dump($a);
?>