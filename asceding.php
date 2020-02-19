<?php
$cars = array("Volvo","Bmw","Toyota");
sort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
$numbers = array(4,6,2,22,11);
rsort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo "<br>";
}

?>

<form action="contact">
    <label for="">First Name :</label>
    <input type="text"name="first name"placeholder="*Your first name"required> <br>

    <label for="">Second Name :</label>
    <input type="text"name="Second Name"placeholder="*Your Second Name"required> <br>

    <label for="">Telphone Number :</label>
    <input type="text"name="Telphone Number"placeholder="*Your Telphone Number"required> <br>

    <label for="">Age :</label>
    <input type="text"name="Age"placeholder="*Your Age "required> <br>

    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"> <br>

    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd"> <br>

    <button type="submit" class="btn btn-default">Submit</button>
    <br>