<html>
	<head>
		<meta charset="utf-8"/>
	</head>

	<body>

		<h1>Galerie</h1>
		<a href="profile.php">Allgemeines</a>
		<a href="profile_galerie.php">Galerie</a>
		<br>

		<?php
			// Systemeinstellungen 
			$id = "root"; 
			$pw = ""; 
			$host = "localhost"; 
			$database = "itprofi"; 
			$table = "register_personal"; 

			// Connection
			$conn_id = mysql_connect($host,$id,$pw); 
			
			if(!mysql_select_db($database,$conn_id))
			{
			  die('Could not connect: ' . mysql_error());
			}

			// query machen und anzeigen
			$sql = 'SELECT * 
					FROM  ' . $table .
					' WHERE EMail LIKE "anastasia.cora@gmail.com";';
			$result = mysql_query($sql);
			while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
				//fileupload anzeigen
			}
			mysql_close($conn_id);
		?>

	<pre>
		<?php print_r($row); ?>
	</pre>	
	</body>
</html>