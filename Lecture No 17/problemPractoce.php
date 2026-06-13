<?php

// $x = 5;
// $y = ++$x;
// echo $x + $y ;


// $x = 2 ;
// switch($x){
//     case 1:
//         echo "One";
//     case 2:
//         echo "Two";
//         break;
//     case 3:
//         echo "Three";
// }

// echo 105 + "10a";
// $x = 5;
// echo ++$x + $x++ ; // 6 + 6
// echo "<br>";
// echo $x;


// $x = "Ali";
// if($x){
//     echo "True";
// }else{
//     echo "False";
// }

// for($i = 1 ; $i <= 3 ; $i++){
//     for($j = 1 ; $j <= 2 ; $j++){
//         echo "*";
//     }
// }

// $x = 4;
// $x *= 3+2;
// echo $x;

// $x = 8 ;
// switch(TRUE){
//     case ($x > 10):
//         echo "A";
//         break;
//     case ($x > 5):
//         echo "B";
//         break;
// }

// $count = 0;
// while($count < 3){
//     echo $count;
//     $count++;
// }

// $x = 5 ;
// $y = 10 ;

// echo $x++ + ++$y;


// $x = 3 ;
// for($i = 1 ; $i <= 3 ; $i++){
//     $x += $i;
// }

// echo $x;

// $x = 1;
// while($x < 10){
//     $x *= 2;
// }

// echo $x ;

for($i = 1 ; $i <= 5 ; $i++){
    if($i % 2 == 0)
        continue;
    echo $i;
}
?>