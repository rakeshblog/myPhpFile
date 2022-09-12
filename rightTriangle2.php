<?php

    echo "<table border='2n'>";

    for($i=5; $i>=1; $i--){
        echo "<tr>";
    for($k=1; $k<=$i; $k++){   
            echo "<td>&nbsp</td>";
                }
    for($j=1; $j<=5; $j++){
            echo "<td>*</td>";
              }
         echo "</tr>";
    }
    echo "<table>";
?>