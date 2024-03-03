<?php
require "validation.php";
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Thank You</title>
    <link rel="stylesheet" href="../public/styles.css">
</head>

<body>
    <?php
    if (
        $_SERVER['REQUEST_METHOD'] === "POST"
        && validateCard()
        && validateForm($_POST['name'], $_POST['cnum'], $_POST['code'])
        && validateExp($_POST['exp'])
    ) {
        $total = number_format($_SESSION['total'], 2);
        $card = $_SESSION['card'];
        $user = $_SESSION['user'];
        echo "<p>Thank you for your purchase! $user<br>";
        echo "$total has been charged to your $card card.</p>";
    } else {
        header("Location: checkout.php");
        exit(-1);
    }
    ?>

    <?php
    session_destroy();
    ?>
</body>

</html>