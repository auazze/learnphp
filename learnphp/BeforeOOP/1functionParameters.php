<?php

function getStatus($paymentStatus, $showMessage = true): void {
    $message = match ($paymentStatus) {
        1 => "Success",
         default => "Unknown"
    };

    if ($showMessage) {
        echo $message;
    }
}

getStatus(1);
