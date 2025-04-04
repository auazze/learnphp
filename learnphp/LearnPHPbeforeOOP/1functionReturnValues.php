<?php

function getStatus($paymentStatus, $showMessage = true) {
    $message = match ($paymentStatus) { # Если $paymentStatus == 1, то $message = "Success"
        1 => "Success",
        default => "Unknown"
    };

    if ($showMessage) {
        echo $message;
    }

    return $message;
}

$statusMessage = getStatus(1);
echo $statusMessage;