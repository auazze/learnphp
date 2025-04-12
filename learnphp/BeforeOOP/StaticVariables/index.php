<?php

function foo1(): int|float
{
    $a = 1;

    return $a++;
}

echo foo1() . "<br>";    # function finished running - destroyed variable - 1
echo foo1() . "<br>";    # function finished running - destroyed variable - 1
echo foo1() . "<br>";    # function finished running - destroyed variable - 1
# 1 1 1

function foo2(): int|float
{
    static $a = 1;

    return $a++;
}

echo foo2() . "<br>";    # 1
echo foo2() . "<br>";    # 1 retained, now it's incremented to 2
echo foo2() . "<br>";    # 2 retained, now it's incremented to 3
# 1 2 3