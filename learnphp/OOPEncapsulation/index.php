<?php
/*
// Инкапсуляция описывает процесс ограничения даныых и методов одним объектом или классом
$amount = 100;
function foo() {
    global $amount;
    $amount += 50;
}
foo();
echo $amount;
*/

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

echo $myAccount->getBalance();