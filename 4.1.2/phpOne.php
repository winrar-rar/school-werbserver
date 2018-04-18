<!DOCTYPE html>
<html lang ="sv">

	<head>
		<title>4.1.2</title>
		<meta charset="utf-8">
	</head>

	<body>
		<?php

			//Get the value form the first form.
			$replace_value = $_POST["namn"];

			$form = 
			"<form action='phpTwo.php' method='POST'>
				<input type='hidden' name='namn' value='REPLACE'>
				Efternamn:<input name='efternamn' type='text'><br>
				<input type='submit' value='Skicka'>
			</form>";

			//replace the placeholder with value form the first form.
			$form = str_replace("REPLACE", $replace_value, $form);

			//shows the form now.
			echo $form;
		?>
	</body>
</html>