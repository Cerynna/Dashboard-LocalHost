<?php
header("Cache-Control: no-cache, must-revalidate");
?>
<?php
$filename = 'upload/imagePicker.jpg';
$percent = 0.5;

// Content type
header('Content-Type: image/jpeg');

// Calcul des nouvelles dimensions
list($width, $height) = getimagesize($filename);
$new_width = $width * $percent;
$new_height = $height * $percent;

// Redimensionnement
$image_p = imagecreatetruecolor($new_width, $new_height);
$image = imagecreatefromjpeg($filename);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

// Affichage
imagejpeg($image_p, $filename, 100);

echo "<img src='$filename?rand=". rand() ."' />";

header("refresh: 1; URL=pickerImage.php");
exit;
?>
