<?php

$info= gd_info();
print('fff');
$RESULT = 11 + 011 + 0x11;
$image = imagecreate(200, 200);
$white = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
$black = imagecolorallocate($image, 0x00, 0x00, 0x00);
imagefilledrectangle($image, 50, 50, 150, 150, $black);
if (imagetypes() && IMG_PNG) {
    header("Content-Type: image/png");
    imagepng($image);
} else if (
    imagetypes() &
    IMG_JPG) {
    header("Content-Type: image/jpeg");
    imagejpeg($image);
} else if (
    imagetypes() &
    IMG_GIF) {
    header("Content-Type: image/gif");
    imagegif($image);
}

?>
<img src="black.php" />
