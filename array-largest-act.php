<?php

$numberList = array(1, 9, 5.9, 30, 40, 6.7, 70, 69);
$maxNumber = $numberList[0];

foreach($numberList as $number){
    echo $number." | ";
}

for($i = 0; $i < count($numberList); $i++){
    if($numberList[$i] > $maxNumber){
        $maxNumber = $numberList[$i];
    }
}

echo "<br><br>";
echo "Largest: ".$maxNumber;

?>