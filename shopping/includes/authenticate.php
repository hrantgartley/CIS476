<?php
session_start();
require "validation.php";

$_SESSION['user'] = $_POST['user'];
$_SESSION['pwd'] = $_POST['pwd'];
define("PASSWORD", "imnotbroke");
// this is a script (i.e., no html should be in here)
// it will execute on the server-side and forward the browser to one of two 
// pages based on the outcome of the authentication process


if (
    $_SERVER['REQUEST_METHOD'] === "POST"
    && validateForm($_SESSION['user'])
    && $_SESSION['pwd'] === PASSWORD
) {
    header("Location: thankyou.php");
} else {
    header("Location: login.php");
}