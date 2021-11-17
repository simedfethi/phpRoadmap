<?php
$len= strlen("fff");
$length = strlen("PHP"); // $length is now 3
// sin() and asin() are the sine and arcsine math functions
$result = sin(asin(1)); // $result is the sine of arcsin(1), or 1.0
// unlink() deletes a file
//$result = unlink("functions.txt") or die(" failed");
// $result = true or false depending on success or failure
?>

<?php function column()
{ ?>
    </td><td>
<?php }

function strcat($left, $right)
{
    return $left . $right;
}
$first = "This is a";
$second = " complete sentence!";
echo strcat($first, $second);


function doubler($value)
{
    return $value << 1;
}

$r=doubler(16);

function outer ($a)
{
    function inner ($b)
    {
        echo "there $b";
    }
    echo "$a, hello ";
}
// outputs "well, hello there reader"
outer("well");
inner("reader");

$a = 3;
function foo()
{
   global $a;  // without the global , variables are functions scope limited
   $a= 2;
}
foo();
$var = & $GLOBALS['a'];
echo $a;


function counter()
{
    static $count = 0;
    return $count++;
}
for ($i = 1; $i <= 5; $i++) {
    print counter();
}


function doublerref(&$value)
{
    $value = $value << 1;
}
$a = 3;
doublerref($a);
echo $a;


function getPreferences($whichPreference = 'all')
{
// if $whichPreference is "all", return all prefs;
// otherwise, get the specific preference requested...
}

function countList()
{
    if (func_num_args() == 0) {
        return false;
    }
    else {
        $count = 0;
        for ($i = 0; $i < func_num_args(); $i++) {
            $count += func_get_arg($i);
        }
        return $count;
    }
}
echo countList(1, 5, 9); // outputs "15"



function takesTwo($a, $b)
{
    if (isset($a)) {
        echo " a is set\n";
    }
    if (isset($b)) {
        echo " b is set\n";
    }
}
echo "With two arguments:\n";
takesTwo(1, 2);
echo "With one argument:\n";
takesTwo(1,3);



class Entertainment {}
class Clown extends Entertainment {}
class Job {}
function handleEntertainment(Entertainment $a, callable $callback = NULL)
{
    echo "Handling " . get_class($a) . " fun\n";
    if ($callback !== NULL) {
        $callback();
    }
}
$callback = function()
{
// do something
};
handleEntertainment(new Clown); // works
handleEntertainment(new Clown, $callback); // runtime error

function returnOne()
{
    return 42;
}
function returnArray()
{
    return array("ddd","vfgf");

}

function someMath($var1, $var2): int
{
    return $var1 * $var2;
}
echo someMath(10, 5);


$names = array("Fred", "Barney", "Wilma", "Betty");
function &findOne($n) {
    global $names;
    return $names[$n];
}
$person = & findOne(1); // Barney
$person = "Barnetta"; // changes $names[1]

$array = array("really long string here, boy", "this", "middling length",
    "larger");
usort($array, function($a, $b) {
    return strlen($a)-strlen($b);
});
print_r($array);


$array = array("really long string here, boy", "this", "middling length",
    "larger");
$sortOption = 'random';
usort($array, function($a, $b) use ($sortOption)
{
    if ($sortOption == 'random') {
// sort randomly by returning (-1, 0, 1) at random
        return rand(0, 2) - 1;
    }
    else {
        return strlen($a) - strlen($b);
    }
});

print_r($array);


$last=1;