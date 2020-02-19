<?php
$cars =array("Volvo","BMW","Toyota");
echo  count($cars);
$arraylength = count($cars);
for ($x = 0; $x < $arraylength; $x++){
    echo  $cars[$x];
    echo "<br>";
}
?>