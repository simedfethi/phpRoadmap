<?php
$who = 'Kilroy';
$where = 'here';
echo "$who was $where \r\n";
echo $who. 'was'. $where . "\r\n";

$n = 12;
echo "You are the {$n}th person"; // if need to be no space use braket

$bar = 'this is not printed';
$foo = '$bar'; // single quotes not evaluate variables
print("$foo");

$name = 'jon O\' dik ';// escaped single quote
echo $name;
$path = 'C:\\WINDOWS'; // escaped backslash
echo $path;
$nope = '\n'; // not an escape
echo $nope;

$clerihew = <<< EndOfQuote
Sir Humphrey Davy
Abominated gravy.
He lived in the odium
Of having discovered sodium.
EndOfQuote;


echo $clerihew;

printf(<<< Template
%s is %d years old.
Template
    , "Fred", 35);
$dialogue = <<< NoMore
"It's not going to happen!" she fumed.
He raised an eyebrow. "Want to bet?"
NoMore;
echo $dialogue;


function sayIt() {
    $ws = <<< "StufftoSay"
The quick brown fox
Jumps over the lazy dog.
StufftoSay;
    return $ws;
}
echo sayIt() ;


echo "Printy";
echo("Printy"); // also valid
echo "First", "second", "third";

if (print("test\n")) {
    print("It worked!");
}

printf('%.2f', 27.452);

printf('The hex value of %d is %x', 214, 214);
printf('Bond. James Bond. %03d.', 7);
printf('%.2f%% Complete', 2.1);
printf('You\'ve spent $%5.2f so far', 4.1);

$a = array('name' => 'Fred', 'age' => 35, 'wife' => 'Wilma');
print_r($a);

var_dump(true);
var_dump(false);
var_dump(null);
var_dump(array('name' => "Fred", 'age' => 35));
class P {
    var $name = 'Nat';
// ...
}
$p = new P;
var_dump($p);

$string = 'Hello, world';
$length = strlen($string); // $length is 12

for ($i=0;$i< strlen($string);$i++)
{
    printf("the %d element is %s \r\n",$i,$string[$i]);
}

$title = " Programming PHP \n";
$str1 = ltrim($title); // $str1 is "Programming PHP \n"
$str2 = rtrim($title); // $str2 is " Programming PHP"
$str3 = trim($title); // $str3 is "Programming PHP"


$string1 = "FRED flintstone";
$string2 = "barney rubble";
print(strtolower($string1));
print(strtoupper($string1));
print(ucfirst($string2));
print(ucwords($string2));

$table = get_html_translation_table(HTML_ENTITIES);
$input = '<p>Howdy, &quot;Cowboy&quot;</p>';
$output = strip_tags($input);

$input = 'The <b>bold</b> tags will <i>stay</i><p>';
$output = strip_tags($input, '<b>');
$metaTags = get_meta_tags('https://www.youtube.com/');
echo "Web page made by {$metaTags['author']}";

$v=1;