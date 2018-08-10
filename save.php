<?php
$imgsrc = $_POST["imgstr"];
$data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imgsrc));
file_put_contents("img/".rand(1111111111,9999999999).'.jpg', $data);
?>
