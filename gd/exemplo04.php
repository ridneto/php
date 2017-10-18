<?php

header("Content-type: image/jpeg");

$file = "wallpaper.jpg";

$new_width = 256;
$new_height = 256;

list($old_width, $old_height) = getimagesize($file);

$new_image = imagecreatetruecolor($new_width, $new_height);
$old_image = imagecreatefromjpeg($file);

imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);
 // imagem destino, imagem origem, a partir de onde o corte X, a partir de onde Y, <- destino
// reduzir o tamanho da imagem orignal, largura imagem destino, altura imagem destino
//largura imagem orignem, altura imagem destino

imagejpeg($new_image);

imagedestroy($old_image);
imagedestroy($new_image);

?>