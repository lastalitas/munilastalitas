<?php

//$img_src = urldecode($_GET['url']);
$img_src = 'logo.jpeg';
$img_str = base64_encode(file_get_contents($img_src));
echo 'data:' . getimagesize($img_src)['mime'] . ';base64,' . $img_str;

?>