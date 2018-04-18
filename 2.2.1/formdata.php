<!DOCTYPE html>
<html lang ="sv">

	<head>
		<title>2.2.1</title>
		<meta charset="utf-8">
	</head>

	<body>
		<?php
			//foreach ($_GET as $key => $value) {
			//	echo "$key = $value <br>";
			//}

			foreach ($_POST as $key => $value) {
				echo "$key = $value <br>";
			}

		?>
	</body>
</html>