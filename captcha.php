<?php
	session_start();
	function generateRandomString($length = 5)
	{
    	//substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz"), 0, $length);
	}

    $code=generateRandomString();
    $_SESSION["code"]= $code;
	// Set the content-type
	header("Cache-Control: no-cache, must-revalidate");
	header('Content-Type: image/png');

	// Create the image
	$im = imagecreatetruecolor(180, 50);

	// Transparent Background
	imagealphablending($im, false);
	$transparency = imagecolorallocatealpha($im, 0, 0, 0, 127);
	imagefill($im, 0, 0, $transparency);
	imagesavealpha($im, true);

	// Create some colors
	$white = imagecolorallocate($im, 255, 255, 255);
	$grey = imagecolorallocate($im, 128, 128, 128);
	$black = imagecolorallocate($im, 0, 0, 0);

	//imagefilledrectangle($im, 0, 0, 180, 50, $white);
	/*imagedashedline($im, 10, 10, 100, 45, $black);
	imagedashedline($im, 100, 10, 160, 45, $black);
	imagedashedline($im, 10, 30, 110, 10, $black);
	imagedashedline($im, 40, 45, 160, 10, $black);*/

    
	// The text to draw
	$text = 'Testing...';
	// Replace path by your own font path
	$font = 'fonts/Nova.ttf';

	// Add some shadow to the text
	imagettftext($im, 20, 2, 25, 30, $grey, $font, $code);

	// Add the text
	imagettftext($im, 25, 6, 30, 40, $black, $font, $code);

    imagesetthickness($im, 2);
    imageline($im, 10, 10, 100, 45, $black);
    imageline($im, 100, 10, 160, 45, $black);
    imageline($im, 10, 30, 110, 10, $black);
	imageline($im, 40, 45, 160, 10, $black);
    
	// Using imagepng() results in clearer text compared with imagejpeg()
	imagepng($im);
	imagedestroy($im);
?>