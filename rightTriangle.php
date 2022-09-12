<?php
    $i;
    echo "<table border='2n'>";
    for($i=1; $i<=5; $i++){
        echo "<tr>";
        for($j=1; $j<=$i; $j++){
            echo "<td>$i &nbsp</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

?>