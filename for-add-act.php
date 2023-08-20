<!-- <?php

    $sum = 0;

    for($i = 1; $i < 30; $i++){
        if($i % 2 == 0){
            $sum += $i;
        }
    }

    echo "sum = ".$sum;


?> -->



<?php

$sum = 0;
$start = 1;
$end = 30;

for(; $start < $end; $start++){
    if($start % 2 == 0){
        $sum += $start;
        echo $start;

        if($start != ($end - 2)){
            echo " + ";
        }
        else{
            echo " = ";
        }
    }
}

echo $sum;

?>
