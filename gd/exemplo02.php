<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imageString($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imageString($image, 5, 440, 350, "HÁ T@L DÀ PIKENA", $titleColor);
imageString($image, 3, 440, 370, utf8_decode("Concluído em: ") . date("d-m-Y"), $titleColor);

header("Content-type: image/jpeg");

imagejpeg($image, "certificado-" . date("Y-m-d") . ".jpg", 10);

imagedestroy($image);

?>