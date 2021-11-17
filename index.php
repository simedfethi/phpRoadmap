<?php
echo 'ffff </br>';
$link= mysqli_connect('localhost','root','123');
$link->select_db('trip');
$result=mysqli_query($link,'select * from jhi_user');
while ($row= mysqli_fetch_array($result))
{
    //printf('title'. $row['login']);
}
mysqli_close($link);

/* In this section, we take a bunch of variables and
assign numbers to them. There is no real reason to
do this, we're just having fun.
*/
$a = 1;
$b = 2;
$c = 3;
$d = 4;

$ar= array("d","g");
//$ar= array('d','g');

$ref= &$ar;
//include('basics.php');
$d = 4;

function updatecounter()
{
    global $counter;
    $counter++;
}
$counter=10;
updatecounter();
echo 'counter value '. $counter . '</br>';


function updateglobal()
{
    $GLOBALS['counter']++;
}
$counter=10;
updateglobal();
echo 'counter value '. $counter. '</br>';

?>

