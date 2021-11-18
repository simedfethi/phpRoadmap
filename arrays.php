<?php
$person = array("person 1","person 2","person 3");
//print_r($person);
//print_r($person[0]);

$a= array('name'=>'jon','lastname'=>'alex');
print_r($a);
print_r($a['name']);
$person = array("name" => 'Peter');
print "Hello, {$person["name"]}";// output: Hello, Peter (with no warning)


// $addresses not defined before this point
//echo $addresses[0]; // prints nothing
//echo $addresses; // prints nothing
$addresses[0] = "spam@cyberpromo.net";
$addresses[1] = "spam1@cyberpromo.net";
print_r($addresses); // prints "Array"

$price['gasket'] = 15.29;
$price['wheel'] = 75.25;
$price['tire'] = 50.00;

$addresses = array("spam@cyberpromo.net", "abuse@example.com",
    "root@example.com");
$price = array(
    'gasket' => 15.29,
    'wheel' => 75.25,
    'tire' => 50.00
);

$price1 = ['gasket' => 15.29, 'wheel' => 75.25, 'tire' => 50.0];

$emptyarray= array();
$days = array(1 => "Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun");

$family = array("Fred", "Wilma");
$family[] = "Pebbles"; // $family[2] is "Pebbles"

$person = array('name' => "Fred");
$person[] = "Wilma"; // $person[0] is now "Wilma"

$numbers = range(2, 50000); // $numbers = array(2, 3, 4, 5);
$letters = range('a', 'z'); // $letters holds the alphabet
$reversedNumbers = range(5, 2); // $reversedNumbers = array(5, 4, 3, 2);

$family = array("Fred", "Wilma", "Pebbles");
$size = count($family); // $size is 3
$size2= sizeof($family);
$v=1;