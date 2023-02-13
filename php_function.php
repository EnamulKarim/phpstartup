<?php

/* 
1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision
**/

function evenOrOdd($x){
    if($x %2 ==0){
        return "Here {$x} is Even number";
    }else{
    return "Here {$x} is Odd number";
    }

}

echo evenOrOdd(12);


/* 
2. 1+2+3...…….100  Write a loop to calculate the summation of the series
**/

echo PHP_EOL;
$sum=0;
 for($i=1;$i<=100;$i++){
$sum=$sum+$i;
 }
 echo "Summation of the series is {$sum}";
