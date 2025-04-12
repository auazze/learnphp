<?php

$directory = scandir(__DIR__);
echo "<pre>";
print_r($directory);    # 0 - current, 1 - parent directories, 2 or above - files
echo "<pre>";

mkdir("FOO");   # I know linux :)
rmdir("FOO");   # I know linux :)

echo "<br>" . "<br>";

if (file_exists("example.txt")) {
    echo "File found!" . "<br>";
    echo filesize("example.txt") . "<br>";
    file_put_contents("example.txt", "I putted content :)") . "<br>";
    clearstatcache();
    echo filesize("example.txt") . "<br>";
    echo file_get_contents("example.txt");
} else {
    echo "File not found!";
}