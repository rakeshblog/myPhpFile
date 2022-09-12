<?php
    function abc(){
    $a=$_GET['num1'];
    $b=$_GET['num2'];
    $c=$_GET['num3'];
    $d=$_GET['num4'];
    $e=$_GET['num5'];
     $total=$a+$b+$c+$d+$e;
        return $total;   
    }
       $sum=abc();
       percentage($sum);
    function percentage($st){
        $per=($st*100)/500;
        return $per;
    }
    $ab=percentage($sum);
    echo "total marks of student=".$sum."<br>";
    echo "percentage of student=".$ab."%";

?>