<?php

declare(strict_types=1);
function getStatus(int|float $paymentStatus, mixed $showMessage = true): ? string {
    $message = match ($paymentStatus) { # Если $paymentStatus == 1, то $message = "Success"
        1 => "Success",
        default => "Unknown"
    };

    if ($showMessage) {
        echo $message;
        return null;
    }

    return $message;
}

$statusMessage = getStatus(1);    # нельзя сделать аргумент строкой ("1"), потому что параметр функции требует int или float из-за декларирования строгой типизации в начале файла
echo $statusMessage;