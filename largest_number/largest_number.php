<?php 
$num1 = 4;
$num2 = 5;
$num3 = 6;

if($num1>$num2 and $num1 > $num3){
    print("{$num1} is a largest number.");
}else{
    if($num2>$num1 and $num2 > $num3){
    print("{$num2} is a largest number.");
    }else{
    print("{$num3} is a largest number.");
    }
}