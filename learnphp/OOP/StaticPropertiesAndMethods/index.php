<?php

declare(strict_types=1);

//require_once "App/Account.php";
//require_once "App/SocialMedia.php";

spl_autoload_register(function ($class) {
    $formattedClass = str_replace("\\", "/", $class);
    $path = "{$formattedClass}.php";

    require_once $path;
});

use App\{Account, SocialMedia, Utility};

$myAccount = new Account("John", 20);

$myAccount?->deposit(50)->deposit(30);

Utility::printArr([1,2,345,43]);