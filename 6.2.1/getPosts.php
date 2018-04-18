<?php
	//makes the connection to the db.
	$connect = mysql_connect("localhost", "root", "", "guestbook");

	//connection errors.
  	if(! $connect ) {
      die('Could not connect: ' . mysql_error());
   	}

  	$sql = 'SELECT name, mail, homepage, comment FROM guests';

  	mysql_select_db('guestbook');
   	$retval = mysql_query( $sql, $connect );

   	if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   	}

   	
   	

   	while($row = mysql_fetch_assoc($retval)) {
   		echo "<div style='border: 1px solid black; margin: 10px; width: 550px; word-wrap: break-word;'> 
      Namn: <a href='{$row['homepage']}''>{$row['name']}</a> <br>".
   		"Epostadress: <a href='mailto:{$row['mail']}'>{$row['mail']}</a> <br>".
   		"Kommentar: {$row['comment']} <br> </div>";
   	}

  	mysql_close($connect);
?>

