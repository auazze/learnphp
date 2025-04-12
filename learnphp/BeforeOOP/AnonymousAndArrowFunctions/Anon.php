<?php

# insted of typical function
/*
function multiply($num)
{
    return $num * 2;
}

echo multiply(5);
*/

$multiplier = 2;    # instead of global in function, we can use ... use() :)

# make anonymous function
$multiply = function ($num) use($multiplier)    # this use() :)
    # use() WORKS ONLY WITH ANONYMOUS FUNCTIONS
    # otherwise - global
{
    $multiplier = 5;    # just a copy of the original 2 (look in the end)
    return $num * $multiplier;    # it can be echoed like echo $multiply(5); - 10
};

/*
$multiply = function ($num)
{
    return $num * 3;    # it can be echoed too - echo $multiply(5); - 15
};
*/

function sum($a, $b, $callback): int|float
{
    return $callback($a + $b);
}

echo sum(5, 2, $multiply);
# FIRST 5 + 2 in sum(), SECOND result 7 * 2 in multiply anon function. MAGIC

echo "<br>" . $multiplier;  # yep, here is $multiplier is original 2