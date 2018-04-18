<!DOCTYPE html>
<html lang ="sv">

	<head>
		<title>2.1</title>
		<meta charset="utf-8">
	</head>

	<body>
		<!--	name = <?php echo $_GET["name"];?><br>
			age = <?php echo $_GET["age"];?> -->
			
				<?php
					//header('Content-Type: text/plain');
					//echo "<pre>";
					foreach ($_GET as $key => $value){
						echo "$key = $value <br>";
					}
				?>
			
	</body>
</html>