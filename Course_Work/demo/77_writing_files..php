<?php

$file = "example.txt";
$handle = fopen($file, 'w');

if($handle) {
    fwrite($handle, "I love php ...");
} else {
    echo "File could not be written";
}

fclose($handle);

?>