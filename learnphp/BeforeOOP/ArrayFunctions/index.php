<?php

$users = ["John", "Jane", "Bob", null];

# array filtering - isset() - User not found! - checks value and nulls too
if (isset($users[3])) {
    echo "User found!";
} else {
    echo "User not found!";
}

echo "<br>";

# array filtering - array_key_exists() - User found! - checks only key
if (array_key_exists(3, $users)) {
    echo "User found!";
} else {
    echo "User not found!";
}

$users = array_filter(
    $users,
    fn($user) => $user !== "Bob"
);

echo "<pre>";
print_r($users);
echo "<pre>";

$users = array_map(
    fn($user) => strtoupper($user),
    $users
);

echo "<pre>";
print_r($users);
echo "<pre>";

$users = array_merge(
    $users,
    ["Sam", "Jessica"]
);

echo "<pre>";
print_r($users);
echo "<pre>";

sort($users);   # sort(&array) - sorting by value and reorder keys

asort($users);  # asort(&array) - sorting by value and keep keys

echo "<pre>";
print_r($users);
echo "<pre>";