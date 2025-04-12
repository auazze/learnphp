<?php

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

$statusMessage = getStatus(1);
echo $statusMessage;