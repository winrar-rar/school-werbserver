		<?php
			$dat = file_get_contents('count_file.txt');
    		//if the file does not exist it will be created by w
    		$fil = fopen('count_file.txt', 'w');
        	if (flock($fil, LOCK_EX)) {
    			$html = file_get_contents("upg3_1.html");
				$html = str_replace('---$hits---', $dat+1, $html);
				echo $html;
    			fwrite($fil, $dat+1);
    			flock($fil, LOCK_UN);
    		}
    		fclose($fil);
		?>
