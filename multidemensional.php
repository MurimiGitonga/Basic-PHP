<?php
   $cars = array(
    array("volvo",22,18),array("BMW",15,13),array("saab",5,2));

echo $cars[0][0].": Im stock:".$cars[0][1].",sold:".$cars[0][2].".<br>";
echo $cars[1][0].": Im stock:".$cars[1][1].",sold:".$cars[1][2].".<br>";
echo $cars[2][0].": Im stock:".$cars[2][1].",sold:".$cars[2][2].".<br>";

//loop through row
    for($row = 0; $row < 3; $row++) {
        echo "<p><b>Vehicles $row</b></p>";
        echo "</ul>";

//now loop through column
for ($col=0; $col < 3; $col++) {
    echo "<li>" .$cars[$row][$col] . "</li>";
}
echo "</ul>";
}

?>