<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Homepage</title>
</head>

<body>
	<!-- Prompt the user for their first name. This is the "homepage"
        (name it index.php). Provide a submit button that sends the name
        to the server for processing. -->
	<form action="email.php" method="post">
		<label for="name">Enter your name: &nbsp;</label>
		<input type="text" name="first-name" id="name" placeholder="Enter a name" autofocus>
		<input type="submit" value="Submit">
	</form>
	<?php
	// put your code here

	?>
</body>

</html>
