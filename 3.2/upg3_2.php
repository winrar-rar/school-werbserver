<?php
	header("Content-Type: text/html");
  
			$indicesServer = array('PHP_SELF',
			'argv',
			'argc',
			'GATEWAY_INTERFACE',
			'SERVER_ADDR',
			'SERVER_NAME',
			'SERVER_SOFTWARE',
			'SERVER_PROTOCOL',
			'REQUEST_METHOD',
			'REQUEST_TIME',
			'REQUEST_TIME_FLOAT',
			'QUERY_STRING',
			'DOCUMENT_ROOT',
			'HTTP_ACCEPT',
			'HTTP_ACCEPT_CHARSET',
			'HTTP_ACCEPT_ENCODING',
			'HTTP_ACCEPT_LANGUAGE',
			'HTTP_CONNECTION',
			'HTTP_HOST',
			'HTTP_REFERER',
			'HTTP_USER_AGENT',
			'HTTPS',
			'REMOTE_ADDR',
			'REMOTE_HOST',
			'REMOTE_PORT',
			'REMOTE_USER',
			'REDIRECT_REMOTE_USER',
			'SCRIPT_FILENAME',
			'SERVER_ADMIN',
			'SERVER_PORT',
			'SERVER_SIGNATURE',
			'PATH_TRANSLATED',
			'SCRIPT_NAME',
			'REQUEST_URI',
			'PHP_AUTH_DIGEST',
			'PHP_AUTH_USER',
			'PHP_AUTH_PW',
			'AUTH_TYPE',
			'PATH_INFO',
			'ORIG_PATH_INFO') ;

			$html = file_get_contents("upg3_2.html");
			$html_pieces = explode("<!--==xxx==-->", $html);
			$part1 = $html_pieces[0];
			$part2 = $html_pieces[1];
			echo $part1;

			foreach ($indicesServer as $arg) {
				if (isset($_SERVER[$arg])) {
			    //    echo '<tr><td>'.$arg.'</td><td>' . " = ". $_SERVER[$arg] . '</td></tr>'."<br>" ;
				//$html_pieces = str_replace(===xxx===, replace, subject)
			   	//$html_pieces = str_replace(<!--===xxx===-->, replace, $html)
			    	//$html_pieces[1] = str_replace("<!--==xxx==-->", $arg. " = ". $_SERVER[$arg], $html);
			    	
			    	$p = str_replace("...", $arg." = ".$_SERVER[$arg], $part2); //str_replace("...", $arg."=".$_SERVER[$arg], $html);
			    	echo $p."<br>";
			    }

			}
			
?>