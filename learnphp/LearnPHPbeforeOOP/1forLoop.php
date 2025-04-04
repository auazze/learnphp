<?php

for ($i = 1; $i <= 15; $i += 1) {
    if ($i === 6) {
        continue;
    }
    if ($i === 9) {
        break;
    }

    echo $i . "<br>";
}
