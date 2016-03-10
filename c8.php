<?php

$fh = fopen('uploads/test.txt', 'a+');

// echo $fh;

fwrite($fh, 'TEST ');

rewind($fh);

$size = filesize('uploads/test.txt');

$text = fread($fh, $size);

echo $text;

fclose($fh);

unlink('uploads/test.txt');
?>