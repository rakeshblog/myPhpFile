<?php
echo "<table border='2n'>";
for($i=1; $i<=100; $i=$i+10){
    echo "<tr>";
    for($j=$i; $j<$i+10; $j++){
        echo "<td> $j</td>";
    }
    echo "<br>";
    echo "</tr>";
}
    echo"</table>";
?>