<?php
$image = imagecreate(200, 200);
$white = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
$black = imagecolorallocate($image, 0x00, 0x00, 0x00);
$blue= imagecolorallocate($image,0x13,0x04,0x10);
imagefilledrectangle($image, 50, 50, 150, 150, $black);
imagefilledrectangle($image, 40, 40, 140, 140, $blue);

header("Content-Type: image/png");
imagepng($image);
