<?php

declare(strict_types=1);

require_once "Account.php";

$myAccount = new Account("John", 20);

$myAccount->deposit(50)->deposit(30);

var_dump($myAccount);
