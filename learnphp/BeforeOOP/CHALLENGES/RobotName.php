<?php

/*
# Generate two uppercase letters and three digits every new time to new robot
declare(strict_types=1);

function getNewName(): string
{

}
*/

declare(strict_types=1);

function getNewName(): string
{
    return substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 2, 2) . substr(str_shuffle("0123456789"), 2, 3);
}
echo getNewName();

echo "<br> or <br>";

$getNewName = fn() => substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 2, 2) . substr(str_shuffle("0123456789"), 2, 3);
echo getNewName();