<?php

$a = 1;

echo "While Loop" . "<br>";
while ($a <= 15) {
    echo $a . "<br>";

    $a+=1;
}

$a = 1;

echo "Do-While Loop (Executes at least once)" . "<br>";
do {
    echo $a . "<br>";

    $a+=1;
} while ($a <= 0);