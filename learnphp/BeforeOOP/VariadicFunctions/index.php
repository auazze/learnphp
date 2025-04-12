<?php
# instead of limited number of parameters
/*
function sum(int|float $a, int|float $b)
{
    return $a + $b;
}

echo sum(5, 2);
*/

# make variadic function
function sum(bool $dumpArr, int|float ...$nums): int|float # unpacking like in python with *
{
    if ($dumpArr) {
        var_dump($nums);
    }
    return array_sum($nums);
}

echo sum(false, 5, 2, 2,5,6,234,234,235,6,5,456456,21341); # can handle any arguments

# variadic parameter/argument must be the last
# this will not work
/*
function sum(int|float ...$nums, bool $dumpArr): int|float
{
    if ($dumpArr) {
        var_dump($nums);
    }
    return array_sum($nums);
}

echo sum(false, 5, 2, 2,5,6,234,234,235,6,5,456456,21341);

 */

# Keep this in mind - the variable $dumpArr will never be assigned a value if the $nums array contains all the values