<?php

$Num1 = 100;
$Num2 = 122;
$Num3 = 1111;


function calculate($Num1, $Num2, $Num3){
    if($Num1 > $Num2 && $Num1 > $Num3){
        print $Num1;
    }

    if($Num2 > $Num1 && $Num2 > $Num3){
        print $Num2;
    }

    if($Num3 > $Num1 && $Num3 > $Num2){
        print $Num3;
    }
}

calculate($Num1, $Num2, $Num3);



?>