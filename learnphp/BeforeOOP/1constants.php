<?php

if (true) {
    define("FOO", "Hello World");   # cannot be used inside classes
}

if (true) {
    # const FOOO = "Hello World"; # cannot be used inside if statement
}

echo FOO;
# echo FOOO;

echo "<br>";

if (!defined("FOOOO")) {
    define("FOOOO", "Hello World");
}

echo FOOOO;
