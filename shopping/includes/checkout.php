<?php
session_start();
$bat = $_SESSION['bat'];
$rtx = $_SESSION['rtx'];
$headphones = $_SESSION['headphones'];
$gamingChair = $_SESSION['gamingChair'];
$monitorStand = $_SESSION['monitorStand'];


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <h3>Checkout</h3>
    <?php
    echo "Checkout for: " . $_SESSION['user'] . "<br>";
    echo ("Amount to charge: ... $_SESSION[total] ...<br>");
    ?>
    <form action="thankyou.php" method="post">
        <label for="name">Name on Card:</label> <input type="text" name="name"><br>
        <label for="cnum">Card Number:</label> <input type="text" name="cnum"><br>
        <label for="exp">Expiration Date[mm/yy]:</label> <input type="text" name="exp"><br>
        <label for="code">Security Code:</label> <input type="text" name="code"><br>
        <input type="submit">
    </form>
</body>

</html>