<?php

declare(strict_types=1);

require_once "Account.php";

$myAccount = new Account();
$johnsAccount = new Account();

$myAccount->balance = 20;

var_dump($myAccount->balance);  # updated to 20
echo "<br>";
var_dump($johnsAccount);    # original 5.5

# 2 different objects