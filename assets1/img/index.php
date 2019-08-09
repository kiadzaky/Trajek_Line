<?php
// *** Include the class
    include("resize-class.php");
 
    // *** 1) Initialize / load image
    $resizeObj = new resize('sample.jpg');
 
    // *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
    $resizeObj -> resizeImage(150, 100, 'crop');
 
    // *** 3) Save image
    $resizeObj -> saveImage('sample-resized.gif', 100);  ?>