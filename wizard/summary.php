<?php
session_start();
require 'functions.php';
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Summary Page for Wizard</title>
	<link rel="stylesheet" href="styles.css">
</head>

<body class="container">
	<div class="summary">
		<!-- Finally, after the phone number is provided, display a
        summary page that includes all of the information gathered
        along the way: name, email, phone. -->
		<h1>Session Variables</h1>
		<hr>
		<?php
		// put your code here
		if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["phone"])) {
			$phone = $_POST["phone"];
			if (empty($phone)) {
				sleep(3);
				echo "You must enter a phone";
				header("Location: phone.php");
				exit;
			}

			$_SESSION["phone"] = $phone;
			$phone = test_input($phone);
			$name = $_SESSION["first-name"];
			$name = test_input($name);
			$email = $_SESSION["email"];
			$email = test_input($email);

			echo "<h1> Name:  $name </h1>";
			echo "<h1> Email:  $email </h1>";
			echo "<h1> Phone:  $phone </h1>";
		} else {
			if (!isset($_SESSION["phone"])) {
				header("Location: phone.php");
				exit;
			}
		}
		session_unset();
		session_destroy();
		?>
		<hr>
	</div>
</body>

</html>
