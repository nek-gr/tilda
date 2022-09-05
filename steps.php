<?php

 $value =1;
 $step = 0;
while($value<=100){
    echo implode(" ",range($value, min(100,$value+$step))) . "</br>";
    $step++;
    $value += $step;
}