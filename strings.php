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
//$metaTags = get_meta_tags('https://www.youtube.com/');
//echo "Web page made by {$metaTags['author']}";

$name = "Programming PHP";
$output = rawurlencode($name);
echo "http://localhost/{$output}";

$baseUrl = 'http://www.google.com/q=';
$query = 'PHP sessions -cookies';
$url = $baseUrl . urlencode($query);
echo $url;

$string = <<< EOF
"It's never going to work," she cried,
as she hit the backslash (\) key.
EOF;
$string = addslashes($string);
echo $string;
echo stripslashes($string);

echo addcslashes("hello\tworld\n", "\x00..\x1fz..\xff");


$o1 = 3;
$o2 = "3";
if ($o1 == $o2) {
    echo("== returns true<br>");
} if ($o1 === $o2) {
    echo("=== returns true<br>");
}

$n = strcmp("PHP Rocks", 5);
echo($n);
$n = strcasecmp("Fred", "frED"); // $n is 0

$known = "Fred";
$query = "Phred";
if (soundex($known) == soundex($query)) {
    print "soundex: {$known} sounds like {$query}<br>";
} else {
    print "soundex: {$known} doesn't sound like {$query}<br>";
}
if (metaphone($known) == metaphone($query)) {
    print "metaphone: {$known} sounds like {$query}<br> \r\n";
} else {
    print "metaphone: {$known} doesn't sound like {$query}<br> \r\n";
}
$string1 = "Rasmus Lerdorf";
$string2 = "Razmus Lehrdorf";
$common = similar_text($string1, $string2, $percent);
printf("They have %d chars in common (%.2f%%).", $common, $percent);
$similarity = levenshtein("cat", "cot"); // $similarity is 1

$name = "Fred Flintstone";
$fluff = substr($name, 6, 4); // $fluff is "lint"
$sound = substr($name, 11); // $sound is "tone"


$sketch = <<< EndOfSketch
Well, there's egg and bacon; egg sausage and bacon; egg and spam;
egg bacon and spam; egg bacon sausage and spam; spam bacon sausage
and spam; spam egg spam spam bacon and spam; spam sausage spam spam
bacon spam tomato and spam;
EndOfSketch;
$count = substr_count($sketch, "spam");
print("The word spam occurs {$count} times.");

$greeting = "good morning citizen";
$farewell = substr_replace($greeting, "bye", 5, 7);
// $farewell is "good bye citizen"
$farewell = substr_replace($farewell, "kind ", 9, 0);
// $farewell is "good bye kind citizen"

echo strrev("There is no cabal");

echo str_repeat('_.-.', 40);

echo '[' . str_pad('Fred Flintstone', 30, ' ', STR_PAD_LEFT) . "]\n";
echo '[' . str_pad('Fred Flintstone', 30, ' ', STR_PAD_BOTH) . "]\n";



$input = 'Fred,25,Wilma';
$fields = explode(',', $input);
// $fields is array('Fred', '25', 'Wilma')
$fields = explode(',', $input, 2);
// $fields is array('Fred', '25,Wilma')

$fields = array('Fred', '25', 'Wilma');
$string = implode(',', $fields); // $string is 'Fred,25,Wilma'


$string = "Fred,Flintstone,35,Wilma";
$token = strtok($string, ",");
while ($token !== false) {
    echo("{$token}<br />");
    $token = strtok(",");
}

$string = "Fred\tFlintstone (35)";
$a = sscanf($string, "%s\t%s (%d)");
print_r($a);

$record = "Fred,Flintstone,35,Wilma";
$pos = strrpos($record, ","); // find last comma
echo("The last comma in the record is at position {$pos}");

$record = "Fred,Flintstone,35,Wilma";
$rest = strstr($record, ","); // $rest is ",Flintstone,35,Wilma"

$bits = parse_url("http://me:secret@example.com/cgi-bin/board?user=fred");
print_r($bits);

preg_match("/^cow/", "Dave was a cowhand"); // returns false
preg_match("/^cow/", "cowabunga!"); // returns true
preg_match("/cow$/", "Dave was a cowhand"); // returns false
preg_match("/cow$/", "Don't have a cow"); // returns true

preg_match("/c.t/", "cat"); // returns true
preg_match("/c.t/", "cut"); // returns true
preg_match("/c.t/", "c t"); // returns true
preg_match("/c.t/", "bat"); // returns false
preg_match("/c.t/", "ct"); // returns false

preg_match("/\$5.00/", "Your bill is $5.00 exactly"); // returns true
preg_match("/$5.00/", "Your bill is $5.00 exactly"); // returns false

preg_match("/cat|dog/", "the cat rubbed my legs"); // returns true
preg_match("/cat|dog/", "the dog rubbed my legs"); // returns true
preg_match("/cat|dog/", "the rabbit rubbed my legs"); // returns false
preg_match("/^([a-z]|[0-9])/", "The quick brown fox"); // returns false
preg_match("/^([a-z]|[0-9])/", "jumped over"); // returns true
preg_match("/^([a-z]|[0-9])/", "10 lazy dogs"); // returns true

preg_match("/[0-9]{3}-[0-9]{3}-[0-9]{4}/", "303-555-1212"); // returns true
preg_match("/[0-9]{3}-[0-9]{3}-[0-9]{4}/", "64-9-555-1234"); // returns,false

preg_match("{/usr/local/}", "/usr/local/bin/perl"); // returns true

//$textfiles = preg_grep('/\.txt$/', $filenames);

$v=1;