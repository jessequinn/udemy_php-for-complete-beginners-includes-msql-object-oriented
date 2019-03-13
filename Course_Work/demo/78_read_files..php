<?php

$file = "example.txt";
$handle = fopen($file, 'r');

if ($handle) {
//    echo fread($handle,20);
    echo fread($handle, filesize($file));
} else {
    echo "File could not be read";
}

fclose($handle);

?>