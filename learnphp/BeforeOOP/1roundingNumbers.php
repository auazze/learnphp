<?php

echo "Rounding numbers" . "<br>";
echo (int) 5.45 . "<br>";

echo "Round(5.7) - " . round(5.7) . "<br>"; # to the middle - average
echo "Round(5.7, 2) - " . round(5.7, 2) . "<br>"; # to the middle - average
echo "Round(4.455, 2) - " . round(4.455, 2) . "<br>"; # to the middle - average
echo "Round(4.455, 2, PHP_ROUND_HALF_DOWN) - " . round(4.455, 2, PHP_ROUND_HALF_DOWN) . "<br>"; # to the middle - average

echo "<br>";
echo "Ceil(5.45) - " . ceil(5.45) . "<br>"; # to the ceil - up

echo "<br>";
echo "Floor(5.9) - " . floor(5.9) . "<br>";    # to the floor - down
echo "Floor(-0.1) - " . floor(-0.1);    # to the floor - down
