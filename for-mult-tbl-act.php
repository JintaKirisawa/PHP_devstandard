<?php

echo "<table style='border-collapse:separate; border: 1px solid black;'>";

for($i = 1; $i <=10; $i++){
    echo "<tr>";
    for($j = 1; $j <=10; $j++){
        $ans = $i * $j;
        echo "<td style='border: 1px solid black;'>".$ans;
    }
    echo "</tr>";
}

?>