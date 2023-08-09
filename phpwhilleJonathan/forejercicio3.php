<?php

echo "<table>";
 for ($i=1; $i <= 10 ; $i++) { 
    echo "<tr>";
    for ($b=1; $b <=10  ; $b++){ 
        $mult= $i * $b;
        echo "<td>".$mult."</td>";
    }
 }

 echo "</table>";
?>