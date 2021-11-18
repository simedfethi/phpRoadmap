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
echo "Cover: {$book_cover}, Book Shape: {$book_shape}, Shape: {$shape} \n";

$addresses = array("spam@cyberpromo.net", "abuse@example.com");
foreach ($addresses as $adress)
{
   echo "processing:{$adress} \n";
}

$person = array('name' => "Fred", 'age' => 35, 'wife' => "Wilma");

foreach ($person as $key => $value)
{
    echo " $key :  $value  \n";
}


$addresses = array("spam@cyberpromo.net", "abuse@example.com");
$addressCount = count($addresses);
for ($i = 0; $i < $addressCount; $i++) {
    $value = $addresses[$i];
    echo "{$value}\n";
}

$printRow = function ($value, $key)
{
    print("<tr><td>{$key}</td><td>{$value}</td></tr>\n");
};
$person = array('name' => "Fred", 'age' => 35, 'wife' => "Wilma");
echo "<table border=1>";
array_walk($person, $printRow);
echo "</table>";


$addItUp = function ($runningTotal, $currentValue)
{
    $runningTotal += $currentValue * $currentValue;
    return $runningTotal;
};
$numbers = array(2, 3, 5, 7);
$total = array_reduce($numbers, $addItUp);
echo $total;

$addresses = array("spam@cyberpromo.net", "abuse@example.com",
    "root@example.com");
$gotSpam = array_search("spam@cyberpromo.net", $addresses); // $gotSpam istrue
$gotMilk = in_array("milk@tucows.com", $addresses); // $gotMilk is false


$names = array("Cath", "Angela", "Brad", "Mira");
ksort($names); // $names is now "Angela", "Brad", "Cath", "Mira"


function userSort($a, $b)
{
// smarts is all-important, so sort it first
    if ($b == "smarts") {
        return 1;
    }
    else if ($a == "smarts") {
        return −1;
    }
    return ($a == $b) ? 0 : (($a < $b) ? −1 : 1);
}

$u2h = array(
    'gnat' => "/home/staff/nathan",
    'frank' => "/home/action/frank",
    'petermac' => "/home/staff/petermac",
    'ktatroe' => "/home/staff/kevin"
);
$h2u = array_flip($u2h);
$user = $h2u["/home/staff/kevin"]; // $user is now 'ktatroe'

$weekdays = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday");
shuffle($weekdays);
print_r($weekdays);

$scores = array(98, 76, 56, 80);
$total = array_sum($scores); // $total = 310


$first = array("1","hello", "world"); // 0 => "hello", 1 => "world"
$second = array("1","exit", "here"); // 0 => "exit", 1 => "here"
$merged = array_merge($first, $second);
// $merged = array("hello", "world", "exit", "here")



$a1 = array("bill", "claire", "ella", "simon", "judy");
$a2 = array("jack", "claire", "toni");
$a3 = array("ella", "simon", "garfunkel");
// find values of $a1 not in $a2 or $a3
$difference = array_diff($a1, $a2, $a3);
print_r($difference);

function isOdd ($element) {
    return $element % 2;
}
$numbers = array(9, 23, 24, 27);
$odds = array_filter($numbers, "isOdd");

function arrayUnion($a, $b)
{
    $union = array_merge($a, $b); // duplicates may still exist
    $union = array_unique($union);
    return $union;
}
$first = array(1, "two", 3);
$second = array("two", "three", "four");
$union = arrayUnion($first, $second);
print_r($union);
print'2';
echo '1'. 1+3;

$x = "abc";
$$x = 200;
echo $x."<br/>";
echo $$x."<br/>";
echo strlen('1\n2')*strlen("1\n2");


class BasicArray implements Iterator
{
    private $position = 0;
    private $array = ["first", "second", "third"];

    public function __construct()
    {
        $this->position = 0;
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function current()
    {
        return $this->array[$this->position];
    }

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        $this->position += 1;
    }

    public function valid()
    {
        return isset($this->array[$this->position]);
    }
}
$basicArray = new BasicArray();
foreach ($basicArray as $value) {
    echo "{$value}\n";
}
foreach ($basicArray as $key => $value) {
    echo "{$key} => {$value}\n";
}
$v=1;