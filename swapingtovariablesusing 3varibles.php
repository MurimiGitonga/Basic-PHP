<?php

$temp=$a;$a=5;
$b=6;
$temp=0;
echo"the value of a is ".$a;
echo"the value of b is ".$b;
$a=$b;
$b=$temp;
echo"value of a after swap".$a;
echo"value of b after swap".$b;
?>
