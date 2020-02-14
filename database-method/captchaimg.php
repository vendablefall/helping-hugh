<?php
//start session
session_start();
//generate random 32-character string
$md5_code=md5(rand(0,999));
//take only six characters from the code generated above
$s_code=substr($md5_code,15,6);
//store the security code in session
$_SESSION['security_code']=$s_code;
//define width and height of image
$mwidth=100;
$mheight=30;
//create blank image
$image=imagecreate($mwidth,$mheight);
//create colors
$black=imagecolorallocate($image,0,0,0);
$white=imagecolorallocate($image,255,255,255);
$grey = ImageColorAllocate($image, 210, 210, 210);
//set background color of the image to black
imagefill($image,0,0,$black);
//write security code on the image
imagestring($image, 3,30,3,$s_code, $white);
//draw shapes on the image
imagerectangle($image,0,0,$mwidth/2,$mheight/2,$grey);
imageline($image,0,0,$mwidth,$mheight/2,$grey);
//tell browse about the type of content to view
header("Content-type: image/png");
//create png image
imagepng($image);
//clean up resource
imagedestroy($image);

?>