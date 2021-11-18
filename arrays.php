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

$r= array(1,2);
$r=array_pad($r,10000,0);

$row0 = array(1, 2, 3);
$row1 = array(4, 5, 6);
$row2 = array(7, 8, 9);
$multi = array($row0, $row1, $row2);
$value = $multi[2][0]; // row 2, column 0. $value = 7
 echo "{$multi[2][0]} ";

$person = array("Fred", 35, "Betty");
list($name, $age, $wife) = $person;

$values = range('a', 'e'); // use range to populate the array
list($m, , $n, , $o) = $values; // $m is "a", $n is "c", $o is "e"

$people = array("Tom", "Dick", "Harriet", "Brenda", "Jo");
$middle = array_slice($people, 2, 4); // $middle is array("Harriet","Brenda")


$nums = range(1, 7);
$rows = array_chunk($nums, 3);
print_r($rows);

$person = array('name' => "Fred", 'age' => 35, 'wife' => "Wilma");
$keys = array_keys($person); // $keys is array("name", "age", "wife")


$person1['age'] = 0; // unborn?
if ($person1['age']) {
    echo "true!\n";
}
if (array_key_exists('age', $person1)) {
    echo "exists!\n";
}


$a = array(0, NULL, '');
function tf($v)
{
    return $v ? 'T' : 'F';
}
for ($i=0; $i < 4; $i++) {
    printf("%d: %s %s\n", $i, tf(isset($a[$i])), tf(array_key_exists($i,
        $a)));
}

$shape = "round";
$array = array('cover' => "bird", 'shape' => "rectangular");
extract($array, EXTR_PREFIX_ALL, "book");
echo "Cover: {$book_cover}, Book Shape: {$book_shape}, Shape: {$shape}";

$v=1;