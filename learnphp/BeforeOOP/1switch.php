<?php

$payment = "2"; # it can be string or int in switch statement

switch ($payment) {
    case 1:
        echo "Success";
        break;
    case 2:
        echo "Denied";
        break;
    default:
        echo "Pending...";
}
