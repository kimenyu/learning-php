<?php

$file = './users.txt';

if(file_exists($file)) {
    // echo readfile($file);

    $handle = fopen($file, 'r');
    $conetnts = fread($handle, filesize($file));
    fclose($handle);
    echo $conetnts;
} else {
    $handle = fopen($file, 'w');
    $conetnts = 'Brad' . 'John' . 'James' .
    PHP_EOL . 'Mike';
    fwrite($handle, $conetnts);
    fclose($handle);
}