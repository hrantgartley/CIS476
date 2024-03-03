<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    session_start();
    require "validation.php";
    $bat = $_SESSION['bat'];
    $rtx = $_SESSION['rtx'];
    $headphones = $_SESSION['headphones'];
    $gamingChair = $_SESSION['gamingChair'];
    $monitorStand = $_SESSION['monitorStand'];
    $tax = calculateTax($bat, $rtx, $headphones, $gamingChair, $monitorStand);
} else {
    header("Location: ordersummary.php");
    exit(-1);
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Tax Page</title>
    <link rel="stylesheet" href="../public/styles.css">
</head>

<body>
    <?php
    $subtotal = $_SESSION['subtotal'];
    $total = calculateTotal($subtotal, $tax);
    echo "Your tax is $" . $subtotal . "<br>";
    echo "Your total is $" . number_format($total, 2) . "<br>";

    $_SESSION['total'] = $total;
    if (!isset($_POST["user"])) {
    ?>
        <form action="login.php" method="post">
            <button type="submit">Login</button>
        </form>
    <?php
    } else {
    ?>
        <a href="../index.php">Continue Shopping</a><br>
        <a href="checkout.php">Checkout</a>
    <?php
    } ?>
</body>

</html>