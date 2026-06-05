<?php
// echo "Nested if file is working ";
$isPass = FALSE;
$marks = 53;

if($isPass){
    
echo "Apne test pass kiyaa bhot Ache !";
    if($marks >= 90){
        echo "You are eligible to get a trophy";
    } 

    }
else{
    if($marks >= 60){
        echo "Great Effort";
    }else{
        echo "Bhai mahnat kro";
    }
}
?>