<?php
//strlen() function ;
$name="rajesh kumar khatri.";
    echo "character number of string :".strlen($name);
    echo "<br>";
//str_replace() function; 
    $emp ="welcom Rajesh to our organization, Rajesh is oppointeed as cordinate manager";
    echo str_replace("Rajesh", "Mohane", $emp);
    echo "<br>";
    //min() & max() function ;
    $student_Marks=array(67,88,94,65,33);
    echo "Minimum Marks of student =".min($student_Marks)."<br>";
    echo "Maximum Marks of student =".max($student_Marks);
?>