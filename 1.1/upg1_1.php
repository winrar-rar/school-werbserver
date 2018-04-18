<!DOCTYPE html>
<html lang ="sv">

	<head>
		<title>1.1</title>
		<meta charset="utf-8">
	</head>

	<body>

		<?php
        $dat = file_get_contents('count_file.txt');
    	//if the file does not exist it will be created by w
    	$fil = fopen('count_file.txt', 'w');
        if (flock($fil, LOCK_EX)) {
    		echo $dat+1;
    		fwrite($fil, $dat+1);
    		flock($fil, LOCK_UN);
    	}
    	fclose($fil);
		?>
	</body>
</html>