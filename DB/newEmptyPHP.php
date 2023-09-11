<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include("resize_img.php");
 
// *** 1) Initialize / load image
$resizeObj = new resize_img('../upload/15151515-0606-3030.jpg');
 
// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
$resizeObj -> resizeImage(300, 200, 'crop');
 
// *** 3) Save image
$resizeObj -> saveImage('sample-resized.gif', 100);
?>
