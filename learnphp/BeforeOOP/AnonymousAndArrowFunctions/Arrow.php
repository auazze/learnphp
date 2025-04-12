<?php

$multiplier = 2;

# make arrow function - one line function and the rules:

# 1) ARROW FUNCTIONS MUST ALWAYS RETURN A VALUE
# 2) ALWAYS MUST CONTAIN AN EXPRESSION - NO ADDITIONAL LOGIC

# no global, no use() - we can see $multiplier variable outside the function
$multiply = fn ($num) => $num * $multiplier;

function sum($a, $b, $callback): int|float
{
    return $callback($a + $b);
}

echo sum(5, 2, $multiply);
# FIRST 5 + 2 in sum(), SECOND result 7 * 2 in multiply anon function. MAGIC

echo "<br>" . $multiplier;  # yep, here is $multiplier is original 2