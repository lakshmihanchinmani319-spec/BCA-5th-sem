<?php
$marks = array(85,67,92,30,45,78,25,88,34,72)
$distiniction=0;
$failed=0;
foreach($marks as $mark){
if($mark>=75){
$distiniction ++;
}
else if($mark<35){
$failed ++;
}
}
echo "Number of Distiniction students:
$distiniction <br>";
echo "Number of Failed student:$failed";
?>