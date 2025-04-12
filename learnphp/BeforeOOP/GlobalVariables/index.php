<?php

$x = 5; # variable $x exists here

# FIRST 6
include "example.php";
# now our $x++ increment from example.php can be here too
# now $x is 6

function foo()
{
    global $x;  # and now, with global scope, it can be here

    # SECOND 6
    echo $x;    # but the $x variable cannot be inside the function

    $x++;   # now it's 7
}

foo();

# FIRST 7
echo $x;