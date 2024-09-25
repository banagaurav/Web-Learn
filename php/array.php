<!-- To create an array we use array() language construct. -->

<?php
//indexed array
$cars = array("Volvo", "BMW", "Toyota");
//or
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";
$arrlength = count($cars);
for ($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
}

//Associative arrays
//associatice arrays are arrays that use named keys that we assign to them.
$age = array(
    "Peter" => "35",
    "Ben" => "65",
    "Joe" => "43"
);
echo "Peter is" . $age['Peter'] . "years old.";
?>