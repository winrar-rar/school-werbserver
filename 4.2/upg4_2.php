<!DOCTYPE html>
<?php
	$created = date("Y/m/d")." ".date("h:i:sa");
	$cookie_name = "MyCookie";
	
	//name, value, exp.time
	setcookie($cookie_name, $created, time()+10800);
?>

<html>
	<body>
		<?php
			if(!isset($_COOKIE[$cookie_name])) {
    			echo "Sidan kan behöva uppdateras för att visa cookie information!";
			} else {
   				echo "Namn: ".$cookie_name."<br>";
    			echo "Skapades: ".$_COOKIE[$cookie_name];
			}
		?>
	</body>
</html>
