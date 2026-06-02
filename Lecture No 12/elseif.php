<?php
// echo "Hello world";
// $signals = "Red";
// if($signals == "Red"){
//     echo "Stop!";
// }

// if($signals == "Green"){
//     echo "Cross the road";
// }else{
//     echo "Stop!";
// }
$signals = "Yellow";
$car = "Cultus";
if($signals == "Red" && $car == "civic"){
    echo "Stop!";
}else if($signals == "Yellow" && $car == "Cultus"){
    echo "Ready!";
}else if($signals == "Green" && $car == "civic"){
    echo "Cross the road";
}else{
    echo "Invalid Signals";
}
?>