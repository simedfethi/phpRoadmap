
<?php
class Person
{

var $name="dfdf";
var $age=3;
}

$o = new Person();
$a= (array)$o;
print_r($a);
array('name'=>"jon",'age'=>30);

$a = array('name' => "Fred", 'age' => 35, 'wife' => "Wilma");
$o = (object) $a;
echo $o->name;

$a = 5;
$b = 10;
$c = ($a = $b);

// execute shell command with backtick
$listing = `dir`;
echo $listing;

/*<a href="<? echo $url; ?>"><? echo $linktext ? $linktext : $url; ?></a>  */

$pers = new Person();
if ($pers instanceof Person)
{
    echo 'same class';
}
$last=1;