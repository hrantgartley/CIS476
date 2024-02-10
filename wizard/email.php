<?php
session_start();
require "functions.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Email Page</title>
</head>

<body>
    <!-- On the next page, display a welcome message that includes the
        user's name at the top of the next page along with a form for the
        user's email address. If they did not provide a name, redirect the
        browser back to the homepage. -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["first-name"])) {
        $name = $_POST["first-name"];
        if (empty($name)) {
            sleep(3);
            echo "You must enter a name";
            header("Location: index.php");
            exit;
        }
        $_SESSION["first-name"] = $name;
        $name = test_input($name);
    } else {

        if (!isset($_SESSION["first-name"])) {
            header("Location: index.php");
            exit;
        }
        $name = $_SESSION["first-name"];
    }

    ?>

    <form action="phone.php" method="post">
        <label for="email">Enter your email: &nbsp;</label>
        <input type="text" name="email" id="email" placeholder="Enter a email" autofocus>
        <input type="submit" value="Submit">
    </form>
</body>

</html>
