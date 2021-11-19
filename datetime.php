<?php
$a=1;
++$a;
$a *=$a;
 //echo --$a;
 //echo ab(1,6);

 function ab($a,$b)
 {
  return $a+$b;
 }
 $v=get_loaded_extensions();
$fc= get_extension_funcs($v[0]);
$q=ord(0);
$z1=ord(NULL);

$array = [1,2,3];
foreach ($array as $a)
{
    $a*=2;
}
echo  $array[0] * $array[1] * $array[2] . "\n";

$r= array(
    "1"=>"A",
    1 => "B",
    2 => "C",
    2 => "D"
);
echo count($r);
$file=file('expressions.php');

$i=1;
