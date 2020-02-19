<?php
$age = array("peter"=>"35" , "Ben"=>"37");
$firstKey = array_keys($age)[0];
foreach ($age as $x => $value){
    echo "key=" .$x.",value=".$value;
    echo "<br>";
    echo "peter age is".$firstKey;

}
?>