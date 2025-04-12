<?php

$name = "John";

echo $name;

echo "<br>";

unset($name);

$name = "Sara";

echo $name;

echo "<br>";

unset($name);

$names = ["John", "Jane", "Bob"];

print_r($names);

echo "<br>";

unset($names[1]);   # index and value both gonna be missed too

print_r($names);

echo "<br>";

$names = array_values($names);  # reindex array

print_r($names);
