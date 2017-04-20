<?php
//print_r($_POST)
$imgUrl = $_POST['imgurl'];
$imgUrl1 = $_POST['imgurl1'];

$targ_w = $targ_h = 400; //aca se puede poner una variable para el tamaño, dependiendo de lo que se elija en la vista add, o la vista redimension
$jpeg_quality = 90;
$output_filename=$imgUrl;

$src = $imgUrl;
$img_r = imagecreatefromjpeg($src);
$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );

imagecopyresampled($dst_r,$img_r,0,0,$_POST['x'],$_POST['y'],
    $targ_w,$targ_h,$_POST['w'],$_POST['h']);

header('Content-type: image/jpeg');
imagejpeg($dst_r, $output_filename, $jpeg_quality);

//echo "<img src=header('Content-type: image/jpeg');>";
?>