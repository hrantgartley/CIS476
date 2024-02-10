<?php
session_start();
require 'functions.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Phone Page</title>
</head>

<body>
    <!-- After the user provides a valid email address, send them to
        the next page which will ask for their phone number. A valid email
        address contains the '@' symbol. If that symbol is not found, send
        them back to the email form. -->
    <?php
    // put your code here
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["email"])) {
        $email = $_POST["email"];
        if (empty($email)) {
            sleep(3);
            echo "You must enter an email";
            header("Location: email.php");
            exit;
        }
        $_SESSION["email"] = $email;
        $email = test_input($email);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email address";
            sleep(3);
            header("Location: email.php");
            exit;
        }
    } else {
        if (!isset($_SESSION["email"])) {
            header("Location: email.php");
            exit;
        }
        $email = $_SESSION["email"];
    }    ?>
    <form action="summary.php" method="post">
        <label for="phone">Enter your phone: &nbsp;</label>
        <input type="text" name="phone" id="phone" placeholder="Enter a phone" autofocus>
        <input type="submit" value="Submit">
    </form>
</body>

</html>
