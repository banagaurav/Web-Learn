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

<!-- Multidimensional array -->
<?php
$meals = array(
    'breakfast' => ['Banana', 'Coffee'],
    'lunch' => ['Rice', 'daal', 'veg'],
    'snack' => ['Dried Mulberries', 'noodles']
);

print_r($meals); // print_r helps to print mixed expressions like multidimensional arrays.

$lunches = [
    ['Chicken', "Egg", 'Rice'],
    ['Pork', 'Noodles']
];
print_r($lumches);
echo '<br>';

$flavours = array(
    'Japanese' => array(
        'hot' => 'noodles',
        'salty' => 'sauce'
    ),
    'Chinese' => array(
        'hot' => 'mustard',
        'sweet' => 'sauce'
    )
);

print_r($flavours);
echo '<br>';
?>