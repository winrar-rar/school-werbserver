<!DOCTYPE html>
<html lang ="sv">

	<head>
		<title>2.2.2</title>
		<meta charset="utf-8">
	</head>

	<body>

		<?php

			//function to help show what a size a file is.
			function human_filesize($bytes, $decimals = 2) {
	    		$size = array('B','kB','MB','GB','TB','PB','EB','ZB','YB');
	    		$factor = floor((strlen($bytes) - 1) / 3);
	    		return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$size[$factor];
			}

			    $file = $_FILES["file"];

              	$file_name = $file["name"];
              	$file_ext = explode(".", $file_name);
              	$file_ext = strtolower(end($file_ext));
              	$file_destination = "uploads".".".$file_ext;

			if($_FILES["file"]["type"] == "image/jpeg"){
				if(move_uploaded_file($file["tmp_name"], $file_destination)){
              		//show image
 					echo "<img src=".$file_destination.">";
              	}

			}else if($_FILES["file"]["type"] == "image/png"){
              	if(move_uploaded_file($file["tmp_name"], $file_destination)){
              		//show image
 					echo "<img src=".$file_destination.">";
              	}

			}else if($_FILES["file"]["type"] == "text/plain"){
				$file = fopen($_FILES['file']['tmp_name'], "r");

				//read line by line.
				while(! feof($file)){
					echo fgets($file), "<br>";
				}
				fclose($file);

			}else{
				//else show file name, type and size.
				echo "Name = ", $_FILES["file"]["name"], "<br>";
				echo "Type = ", $_FILES["file"]["type"], "<br>";
				echo "Size = ", human_filesize($_FILES["file"]["size"]);
			}

		?>
	</body>
</html>
