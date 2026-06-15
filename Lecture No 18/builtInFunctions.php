<?php

// echo "Hello world";
// $x = "100";
// $x = 100;
// $x = 3.24;
// $x = TRUE;
// echo gettype($x);
// $x = "100";
// echo $x + $x;
// echo gettype($x);
// settype($x , "int");
// echo "<br>";
// echo gettype($x);

// $y = 3.14;
// echo gettype($y);
// settype($y , "int");
// echo gettype($y);

// $x = NULL;
// echo isset($x);

// $name = 0;
// echo isset($name);
// $x = 100;
// if(isset($x)){
//     echo "Yes x exist";
// }else{
//     echo "It doesnt exist";
// }
// $x = [12,34];
// echo is_array($x);

// $x = NULL;
// echo is_int($x)."is integer";
// echo "<br>";

// echo is_double($x)."is double";
// echo "<br>";

// echo is_string($x)."is string";
// echo "<br>";

// echo is_null($x)."is null";

// $x = "12Hello";
// echo is_numeric($x);


// $x = NULL;
// echo empty($x);


// $name = "Hello";
// unset($name);
// echo isset($name);

$pi = 3.14;
unset($pi);
if(isset($pi)){
    $c = 2 * $pi * 5;
    echo "C = ".$c;
}else{
    echo "pi not found";
}
?>