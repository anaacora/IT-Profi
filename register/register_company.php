<html>

	<head>

	</head>
	
	<body>

		<?php
			
			$errors = array();
			if(count($_POST) > 0){
				
			
			}
		?>

		<?php
		
			if (count($_POST) == 0 || count($errors) > 0){
		
		?>
		<h1>Registration</h1>

		<a href="register_personal.php">Person</a>
		<a href="register_company.php">Firma</a>

		<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
				
				<li>Name der Frima</li>
				<li>Ort, PLZ usw..</li>
				<li>Dienstleistungen</li>
				<li>Auf der Suche nach</li>
				<li>(hier eintragen.............höhö)</li>

				
				<h5>* = Diese Eingabefelder sind obligatorisch!</h5>
				<input class="button" type="submit" value="Senden" />
				
			</form>

			<?php
				if(count($errors) > 0){
					
					echo '<h3 class="error2" >Um das Formular korrekt abzusenden: </h3>';
					
					foreach ($errors as $error){
						echo '<p class="error2" >-' . $error . '<br/ ></p>';
					}
				
				}
				
			?>

		<?php 
			}
			else{
		?>
		
			<?php
				if(count($errors) == 0 && count($_POST) > 0){
					
					


					// Systemeinstellungen 
					$id = "root"; 
					$pw = ""; 
					$host = "localhost"; 
					$database = "itprofi"; 
					$table = "register_personal"; 

					// Einstellungen Ende 
					$conn_id = mysql_connect($host,$id,$pw); 
					mysql_select_db($database,$conn_id); 

					$sql = "INSERT INTO ".
							$table . "()" .
							"VALUES()"; 
					mysql_query($sql);

					echo "Bestaetigung";

				}	
			?>		
			
		<?php 
			} 
		?>
	</body>

</html>