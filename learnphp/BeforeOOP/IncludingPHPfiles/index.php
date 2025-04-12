<?php include "nav.php"; ?>
<?php include_once "nav.php";    # _once - executes once ?>
<?php require "nav.php"; ?>
<?php require_once "nav.php";    # _once - executes once ?>

<?php include_once "nav.php";   # if the file doesn't exist - WARNING ?>
<?php require_once "nav.php";   # if the file doesn't exist - FATAL ERROR ?>

<?php
$data = include "example.php";
echo $data;
?>

<h1>Home page</h1>