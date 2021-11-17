
<?php include "base.html"; ?>
    content
<?php include "footer.html"; ?>
<?php
include "codelib.php";
//require "codelib.php"; // require block execution if not found , include is more forgiving.
//include "http://www.example.com/codelib.php";

for ($i = 0; $i < 10; $i++) {
    include_once "base.html";
   // include "base.html";
}
$list= get_included_files();
foreach ($list as $s)
{
    printf($s. "\r\n");


}
$x=1;
?>
<? echo "Hello, world"; ?>
<input type="text" name="first_name" value="<?= "Dawn"; ?>">
