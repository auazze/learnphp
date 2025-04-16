<?php

declare(strict_types=1);

require_once "App/Account.php";

use App\Account;

$myAccount = new Account("john", 20);

$myAccount?->deposit(50)->deposit(30);

var_dump($myAccount);
