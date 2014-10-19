<html>

	<head>

	</head>
	
	<body>

		<?php
			
			$errors = array();
			if(count($_POST) > 0){

				if($_POST['name'] == ''){
					
					$errors ['name'] = 'Fuellen Sie Bitte das Feld "Name" ein.';
					
				}
				if($_POST['email'] == ''){
					
					$errors ['email'] = 'Fuellen Sie Bitte das Feld "E-Mail" ein.';
				
				}
				if($_POST['password'] == ''){
					
					$errors ['empasswordail'] = 'Fuellen Sie Bitte das Feld "Passwort" ein.';
				
				}
				if($_POST['strasse'] == ''){
				
					$errors ['strasse'] = 'Fuellen Sie Bitte das Feld "Strasse" ein.';
				
				}
				if($_POST['plz'] == ''){
					
					$errors ['plz'] = 'Fuellen Sie Bitte das Feld "PLZ" ein.';
				
				}
				if($_POST['ort'] == ''){
					
					$errors ['ort'] = 'Fuellen Sie Bitte das Feld "Ort" ein.';
				
				}
				if($_POST['dienstleistungen'] == ''){
					
					$errors ['dienstleistungen'] = 'Fuellen Sie Bitte das Feld "Dienstleistungen" aus.';
					
				}				
				if($_POST['suchenach'] == ''){

					$errors ['suchenach'] = 'Fuellen Sie Bitte das Feld "Auf der Suche nach.." aus.';
				}					
			
			}
		?>

		<?php
		
			if (count($_POST) == 0 || count($errors) > 0){
		
		?>
			<h1>Registration</h1>

			<a href="register_personal.php">Person</a>
			<a href="register_company.php">Firma</a>

			<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
					
				<label> 
					<a>*Name der Firma: </a>
					<input type="text" name="name" placeholder="Name" <?php if(count($_POST) > 0) if($_POST['name'] != '') echo 'value="' . $_POST['name'] . '" '; else echo 'class="error" ';?> />
				</label>
				<label for="email" >
					<a>*E-Mail: </a>
				</label>
				<input id="email" name="email" type="email" placeholder="muster@email.com"   <?php if(count($_POST) > 0) if($_POST['email'] != '') echo 'value="' . $_POST['email'] . '" '; else echo 'class="error"';?>/>
				
				<br>
				<label for="password" >
					<a>*Passwort: </a>
				</label>
				<input id="password" name="password" type="password" placeholder="*********"   <?php if(count($_POST) > 0) if($_POST['password'] != '') echo 'value="' . $_POST['password'] . '" '; else echo 'class="error"';?>/>
				
				<br>
				<label for="tel" >
					<a>Telefon: </a>
				</label>
					<input id="tel" name="tel" type="tel" placeholder="Telefon"   <?php if(count($_POST) > 0) if($_POST['tel'] != '') echo 'value="' . $_POST['tel'] . '" '; else echo 'class="error" ';?>/>
				
				<br>
				<label> 
					<a>*Strasse: </a>
					<input type="text" name="strasse" placeholder="Strasse" <?php if(count($_POST) > 0) if($_POST['strasse'] != '') echo 'value="' . $_POST['strasse'] . '" '; else echo 'class="error" ';?> />
				</label>
				<br>
				<label> 
					<a>*PLZ: </a>
					<input type="text" name="plz" placeholder="PLZ" <?php if(count($_POST) > 0) if($_POST['plz'] != '') echo 'value="' . $_POST['plz'] . '" '; else echo 'class="error" ';?> />
				</label>
				<br>
				<label> 
					<a>*Ort: </a>
					<input type="text" name="ort" placeholder="Ort" <?php if(count($_POST) > 0) if($_POST['ort'] != '') echo 'value="' . $_POST['ort'] . '" '; else echo 'class="error" ';?> />
				</label>
				<label> 
					<a>*Beschreibung der Dienstleistungen</a>
					<textarea name="dienstleistungen" cols="35" rows="6"><?php if(isset($_POST['dienstleistungen']))echo @$_POST['dienstleistungen']; ?></textarea>
				</label>
				<br>
				<label> 
					<a>*Auf der Suche nach...</a>
					<textarea name="suchenach" cols="35" rows="6"><?php if(isset($_POST['suchenach']))echo @$_POST['suchenach']; ?></textarea>
				</label>
				<br>

				
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
					
					
					$name = $_POST['name'];
					$email = $_POST['email'];
					$password = $_POST['password'];
					$strasse = $_POST['strasse'];
					$plz = $_POST['plz'];
					$ort = $_POST['ort'];
					$tel = $_POST['tel'];
					$dienstleistungen = $_POST['dienstleistungen'];
					$suchenach = $_POST['suchenach'];

					// Systemeinstellungen 
					$id = "root"; 
					$pw = ""; 
					$host = "localhost"; 
					$database = "itprofi"; 
					$table = "register_company"; 

					// Einstellungen Ende 
					$conn_id = mysql_connect($host,$id,$pw); 
					mysql_select_db($database,$conn_id); 

					$sql_reg = "INSERT INTO ".
							$table . "(Name, EMail, Passwort, Telefon, Strasse, PLZ, Ort, Dienstleistungen, SucheNach) " .
							"VALUES('".	$name."', '". 
										$email."', '". 
										md5($passwort)."', '". 
										$tel."', '". 
										$strasse."', '". 
										$plz."', '". 
										$ort."', '". 
										$dienstleistungen."', '". 
										$suchenach. "')"; 
					mysql_query($sql_reg);
					$table = "login"; 
					$sql_log = "INSERT INTO ".
							$table . "(EMail, Kennwort) " .
							"VALUES('".$email."', '". 
										md5($passwort). "')"; 
					mysql_query($sql_log);
					echo "Bestaetigung";

				}	
			?>		
			
		<?php 
			} 
		?>
	</body>

</html>