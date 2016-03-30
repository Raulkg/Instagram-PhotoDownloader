<?php
 if (isset($_GET["w1"])) {
	 $ref = $_SERVER['HTTP_REFERER'];

if($ref !== 'http://yourdomainname/to/avoid/externallinks') {
  die("Hotlinking not permitted");
}

     $x = $_GET["w1"];
    Thumbnail($x,"uploads/image" . rand() . ".jpeg");
	//Get the file

   echo $x;

   }else{
   echo 'no variable received';
   }
   
   
 function Thumbnail($url, $filename, $width = 250, $height = true) {

 // download and create gd image
 $image = ImageCreateFromString(file_get_contents($url));

 // calculate resized ratio
 // Note: if $height is set to TRUE then we automatically calculate the height based on the ratio
 $height = $height === true ? (ImageSY($image) * $width / ImageSX($image)) : $height;

 // create image 
 $output = ImageCreateTrueColor($width, $height);
 ImageCopyResampled($output, $image, 0, 0, 0, 0, $width, $height, ImageSX($image), ImageSY($image));

 // save image
 ImageJPEG($output, $filename, 95); 

 // return resized image
 return $output; // if you need to use it
}

?>