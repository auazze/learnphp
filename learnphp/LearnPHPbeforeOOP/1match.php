<?php

$payment = "1"; # it has to be the same type in match statement

echo match ($payment) {
    1 => "Success",
    2 => "Denied",
    default => "Unknown, maybe, expression expects the int, but not a string ?..",
};

?>

<br> or <br>

<?php

$paymentStatus = 1;   # it was a string, but match expression tryna produce the ints (1 or 2), so it's has to be an int
$message = match ($paymentStatus) {
    1 => "Success",
    2 => "Denied",
    default => "Pending...",
};

echo $message;

?>

<br> complex - else/if variation <br>

<?php

$paymentStatus = 2;

$message = null;

if ($paymentStatus == 1) {
    $message = "Success";
} else if ($paymentStatus == 2) {
    $message = "Denied";
} else {
    $message = "Unknown";
}

echo $message;