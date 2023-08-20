<?php

for($i = 1; $i <= 9; $i = $i + 2){
    echo $i."-".($i + 1);
    if($i != 9){
        echo ".";
    }
}

?>