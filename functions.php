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

$last=1;