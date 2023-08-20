<?php
$i = 1;
do{
    if($i < 5){
        echo "I is not big enough"
        break;
    }

    $i *= $factor;
    if($i < $minimum_limit){
        break;
    }
    echo "I is ok"
}while(0);

?>