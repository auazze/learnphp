<?php

$multiplier = 2;

$multiply = fn ($num) => $num * $multiplier;

function anotherMultiply($num): float|int
{
    return $num * 2;
}

function sum(int|float $a, int|float $b, callable $callback): int|float
{
    return $callback($a + $b);
}

echo sum(5, 2, "anotherMultiply");

echo "<br>" . $multiplier;