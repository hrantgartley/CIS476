<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
    <link rel="stylesheet" href="form.css">

</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $sex = $_POST["sex"];
        $country = $_POST["country"];
        $message = $_POST["message"];
        $newsletter = isset($_POST["newsletter"]) ? "Yes" : "No";

        $name = test_input($name);
        $sex = test_input($sex);
        $country = test_input($country);
        $message = test_input($message);
        $newsletter = test_input($newsletter);

        echo "<h2>Form Data</h2>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Sex:</strong> $sex</p>";
        echo "<p><strong>Country:</strong> $country</p>";
        echo "<p><strong>Message:</strong> $message</p>";
        echo "<p><strong>Subscribe to newsletter:</strong> $newsletter</p>";
    } else {
        echo "<p>Form not submitted.</p>";
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
</body>

</html>
