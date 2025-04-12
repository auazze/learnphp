<?php

# PASS BY VALUE - changing only a copy of original value
/*
 * $cup = "empty";
 * fillCup(NotEmpty)
 * $cup is still Empty
 */

# PASS BY REFERENCE - changing original and copy both
/*
 * $cup = "empty";
 * fillCup(NotEmpty)
 * $cup is NotEmpty too
 */

$cup = "empty";

function fillCup(&$cupParam)
# $cupParam - creating unique copy of $cup
# &$cupParam - passing by reference (modifies the original)
{
    $cupParam = "filled";
}

fillCup($cup);  # modifies the original value

echo $cup;

echo "<br>" . "<br>";

$myCup = "empty";
$myFriendsCup = "empty";

function fillCupAgain(&$cupParam)
# $cupParam - creating unique copy of $cup
# &$cupParam - passing by reference (modifies the original)
{
    $cupParam = "filled";
}

fillCupAgain($myCup);         # modifies the original value
fillCupAgain($myFriendsCup);  # modifies the original value

echo $myCup;
echo $myFriendsCup;
