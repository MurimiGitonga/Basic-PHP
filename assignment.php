<?php
$k=40;
$e=50;
$m=30;
$tsum=$k+$e+$m;
$average=$tsum/3;
echo "average of 3 is <br>".$average;
echo "sum value of K,E,M".$tsum;

if($average>60)
{
    echo"print division 1";
}
elseif ($average>50) {
    echo "division 2";
}
elseif ($average > 35) {
    echo "print division 3 <br>";
}else{
    echo "fail <br>";
}
echo "$m <br>"
?>