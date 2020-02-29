<?php
$startdate = strtotime("Sunday");
$enddate = strtotime("+6 Weeks", $startdate);
 while ($startdate < $enddate){
     echo date("M d", $startdate) . "<br>";
     $startdate = strtotime("+1 Week",$startdate);
 }
 ?>