<?php 
 echo "<body style='background-color:green'>";
 echo "Hello Developer, This is VERSION 1.0 - GREEN <br><br>";
 echo "My Pod IP is : ".$_SERVER['SERVER_ADDR'];
 echo "<br><br>";
 echo "<img src='santecgif.gif' width=200 height=200 />";
?>


<?php
// FETCH IMAGE & WRITE TEXT
$img = imagecreatefromjpeg('santecgif.gif');
$white = imagecolorallocate($img, 255, 255, 255);
$txt = "Hello Developer, This is VERSION 1.0 - GREEN and My Pod IP is: " .$_SERVER['SERVER_ADDR'];
$font = ""; 
imagettftext($img, 24, 0, 5, 24, $white, $font, $txt);

// OUTPUT IMAGE
header('Content-type: image/gif');
imagejpeg($img);
imagedestroy($img);

// OR SAVE TO A FILE
// THE LAST PARAMETER IS THE QUALITY FROM 0 to 100
// imagejpeg($img, "test.jpg", 100);
?>
