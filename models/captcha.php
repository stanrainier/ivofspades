<?php 
// require_once "config.php"; 

// if (isset($_POST['submit']) && $_POST['g-recaptcha-response'] != "") {
//     include "config.php";
//     $secret = '6LdHWbsiAAAAAOFJjt8F5WZqqdaidLNy5SStsGny';
//     $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
//     $responseData = json_decode($verifyResponse);
//     if ($responseData->success) {
//       $validation = $_POST[TRUE];
//       echo "validated";
//       alert("HELLO");
//     }
//     else{
//       alert("reCAPTCHA error");
//       echo "reCAPTCHA error";
//     }
// }

function create_capacha($text)
{
//GENERATE  CAPTCHA IMAGE
  $width = 200;
  $height = 100;
  $fontfile = realpath('../../models/OpenSans-Regular.ttf');

  $image = imagecreatetruecolor($width, $height);

  $white = imagecolorallocate($image, 255, 255, 255);
  $black = imagecolorallocate($image, 0, 0, 0);

  imagefill($image, 0, 0, $white);
  imagettftext($image, 25, rand(-20,20), $width/4, 60, $black, $fontfile, $text);

  $warped_image = imagecreatetruecolor($width, $height);
  imagefill($warped_image, 0, 0, imagecolorallocate($warped_image, 255, 255, 255));

  for ($x=0; $x < $width; $x++) { 
    # code...
    for ($y=0; $y < $height; $y++) { 
      # code...
      $index = imagecolorat($image, $x, $y);
      $color_comp = imagecolorsforindex($image, $index);

      $color = imagecolorallocate($warped_image, $color_comp['red'], $color_comp['green'], $color_comp['blue']);

      $imageX = $x;
      $imageY = $y + sin($x / 10) * 10;

      imagesetpixel($warped_image, $imageX, $imageY, $color);
    }
  }

  $path = "capacha.jpg";
  imagejpeg($warped_image,$path);
  imagedestroy($warped_image);
  imagedestroy($image);

  return $path;
}

// SHOW CAPTCHA
$filename = session_id();

if(count($_POST)>0){

  $number = file_get_contents($filename);
  if($_POST['Login'] == $number)
  {
    echo "<div style='margin:auto;width:300px;text-align:center;padding:10px;'>CAPCHA is correct!</div>";
    //redirect or check if other details are correct
  }else{
    echo "<div style='margin:auto;width:300px;text-align:center;padding:10px color:red;'>CAPTCHA is incorrect</div>";
    $text = rand(10000,99999);

    $myimage = create_capacha($text);
    file_put_contents($filename, $text);
  }
}else{

  $text = rand(10000,99999);

  $myimage = create_capacha($text);
  file_put_contents($filename, $text);
}

?>

