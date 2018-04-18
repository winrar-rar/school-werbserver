<?php
	//makes the connection to the db.
	$connect = mysql_connect("localhost", "root", "", "guestbook");

	//connection errors.
   	if(! $connect ) {
      die('Could not connect: ' . mysql_error());
   	}

  	//anti- HTML/XML injection.
	function antiInjection($string)
	{
	    $string = stripslashes($string);
	    $string = strip_tags($string);
	    $string = mysql_real_escape_string($string);
	    return $string;
	}

	//data from form.
	$namn = antiInjection($_POST["namn"]);
	$epost = antiInjection($_POST["epost"]);
	$hemsida = antiInjection($_POST["hemsida"]);
	$kommentar = antiInjection($_POST["kommentar"]);

	//insert data.
	$sql = 'INSERT INTO guests'. "(name, mail, homepage, comment)".
			"VALUES ('$namn', '$epost', '$hemsida', '$kommentar')";

	mysql_select_db('guestbook');
   	$retval = mysql_query( $sql, $connect );
   
   	//informs the user if data could not be entered.
   	if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   	}

   	echo "Entered data successfully\n";
  	header("Location: getPosts.php");

	mysql_close($connect);

?>