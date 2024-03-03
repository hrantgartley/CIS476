<?php
require "validation.php";
require "prices.php";
if (
    filter_input(INPUT_SERVER, 'REQUEST_METHOD')
    && validateForm(
        $_POST['baseball_bat_quantity'],
        $_POST['rtx_4090_quantity'],
        $_POST['headphones_quantity'],
        $_POST['gaming_chair_quantity'],
        $_POST['monitor_stand_quantity']
    )
) {

    session_start();
    $bat = filter_input(INPUT_POST, 'baseball_bat_quantity', FILTER_VALIDATE_INT);
    $rtx = filter_input(INPUT_POST, 'rtx_4090_quantity', FILTER_VALIDATE_INT);
    $headphones = filter_input(INPUT_POST, 'headphones_quantity', FILTER_VALIDATE_INT);
    $gamingChair = filter_input(INPUT_POST, 'gaming_chair_quantity', FILTER_VALIDATE_INT);
    $monitorStand = filter_input(INPUT_POST, 'monitor_stand_quantity', FILTER_VALIDATE_INT);


    // define session variables
    $_SESSION['bat'] = $bat;
    $_SESSION['rtx'] = $rtx;
    $_SESSION['headphones'] = $headphones;
    $_SESSION['gamingChair'] = $gamingChair;
    $_SESSION['monitorStand'] = $monitorStand;

    // calculate subtotal
    $subtotal = $bat * BAT_PRICE + $rtx * RTX_PRICE + $headphones * HEADPHONES_PRICE + $gamingChair * GAMING_CHAIR_PRICE + $monitorStand * MONITOR_STAND_PRICE;
    $_SESSION['subtotal'] = $subtotal;
} else {
    header("Location: index.php");
    exit(-1);
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Order Summary</title>
    <link rel="stylesheet" href="../public/styles.css">
</head>

<body>
    <h3>Order Summary</h3>
    <?php

    echo "Your subtotal is $" . $subtotal . "<br>";

    ?>
    <form action="tax.php" method="post">
        <input type="submit" value="Confirm" name="taxSubmit">
    </form>
</body>

</html>