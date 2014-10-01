<html>

	<head>

	</head>
	
	<body>

		<?php
			
			$errors = array();
			if(count($_POST) > 0){
				
				
				if(!isset($_POST['anrede'])){
				
					$errors ['anrede'] = 'Waehlen Sie Bitte die Anrede aus.';
					
				}					
				if($_POST['name'] == ''){
					
					$errors ['name'] = 'Fuellen Sie Bitte das Feld "Name" ein.';
					
				}
				
				if($_POST['vorname'] == ''){
				
					$errors ['vorname'] = 'Fuellen Sie Bitte das Feld "Vorname" ein.';
				
				}
				if($_POST['bday'] == ''){
				
					$errors ['bday'] = 'Fuellen Sie Bitte das Feld "Geburtsdatum" ein.';
				
				}
				if($_POST['nationality'] == ''){
				
					$errors ['nationality'] = 'Fuellen Sie Bitte das Feld "Nationalität" ein.';
				
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


				if($_POST['berufsbezeichnung'] == ''){
					
					$errors ['berufsbezeichnung'] = 'Fuellen Sie Bitte das Feld "Berufsbezeichnung" aus.';
					
				}				
				if($_POST['arbeitgeber'] == ''){

					$errors ['arbeitgeber'] = 'Fuellen Sie Bitte das Feld "bisherige(r) Arbeitgeber" aus.';
				}					
				if($_POST['ausbildung'] == ''){

					$errors ['ausbildung'] = 'Fuellen Sie Bitte das Feld "Ausbildung/Lehre" aus.';
				}
				if(!isset($_POST['student'])){
				
					$errors ['student'] = 'Waehlen Sie Bitte aus, ob Sie ein Student sind.';
					
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
				
				<h2>Allgemeine Infos</h2>
				<a <?php if (isset($errors['anrede'])) echo 'class="error2" ';?>>*Anrede:</a>
				<label>
					<input type="radio" name="anrede" value="Frau" <?php if(isset($_POST['anrede'])) if($_POST['anrede'] == 'Frau') echo 'checked ' ;?>/>
					Frau
				</label>
				<label>
					<input type="radio" name="anrede" value="Herr" <?php if(isset($_POST['anrede'])) if($_POST['anrede'] == 'Herr') echo 'checked '; ?> />
					Herr
				</label>
				<br>
				<label> 
					<a>*Profilbild: </a>
					<input type="file" name="profileimg" placeholder="Profilbild" <?php if(count($_POST) > 0) if($_POST['profileimg'] != '') echo 'value="' . $_POST['profileimg'] . '" '; else echo 'class="error" ';?> />
				</label>
				<br>
				<label> 
					<a>*Name: </a>
					<input type="text" name="name" placeholder="Name" <?php if(count($_POST) > 0) if($_POST['name'] != '') echo 'value="' . $_POST['name'] . '" '; else echo 'class="error" ';?> />
				</label>
				<br>
				<label> 
					<a>*Vorname: </a>
					<input type="text" name="vorname" placeholder="Vorname" <?php if(count($_POST) > 0) if($_POST['vorname'] != '') echo 'value="' . $_POST['vorname'] . '" '; else echo 'class="error" ';?> />
				</label>
				<br>
				<label> 
					<a>*Geburtsdatum: </a>
					<input type="date" name="bday" <?php if(count($_POST) > 0) if($_POST['bday'] != '') echo 'value="' . $_POST['bday'] . '" '; else echo 'class="error" ';?> />
				</label>
				<br>
				<label> 
					<a>*Nationalitaet: </a>
					<input type="text" name="nationality" placeholder="Schweiz" <?php if(count($_POST) > 0) if($_POST['nationality'] != '') echo 'value="' . $_POST['nationality'] . '" '; else echo 'class="error" ';?> />
				</label>
				<br>
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
				<br>
				<h2>Berufsspezifische Infos</h2>
				<label> 
					<a>*Berufsbezeichnung: </a>
					<input type="text" name="berufsbezeichnung" placeholder="Informatik Applikationsentwickler" <?php if(count($_POST) > 0) if($_POST['berufsbezeichnung'] != '') echo 'value="' . $_POST['berufsbezeichnung'] . '" '; else echo 'class="error" ';?> />
				</label>
				<br>
				<br>			
				<label> 
					<a>*bisherige(r) Arbeitgeber</a>
					<textarea name="arbeitgeber" cols="35" rows="6"><?php if(isset($_POST['arbeitgeber']))echo @$_POST['arbeitgeber']; ?></textarea>
				</label>
				<br>			
				<label> 
					<a>*Ausbildung/Lehre</a>
					<textarea name="ausbildung" cols="35" rows="6"><?php if(isset($_POST['ausbildung']))echo @$_POST['ausbildung']; ?></textarea>
				</label>
				<br>
				<a <?php if (isset($errors['student'])) echo 'class="error2" ';?>>*Student:</a>
				<label>
					<input type="radio" name="student" value="Ja" <?php if(isset($_POST['student'])) if($_POST['student'] == 'Ja') echo 'checked ' ;?>/>
					Ja
				</label>
				<label>
					<input type="radio" name="student" value="Nein" <?php if(isset($_POST['student'])) if($_POST['student'] == 'Nein') echo 'checked '; ?> />
					Nein
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
					
					$anrede = $_POST['anrede'];
					//$profileimg = $_POST['profileimg'];
					$name = $_POST['name'];
					$vorname = $_POST['vorname'];
					$bday = $_POST['bday'];
					$nationality = $_POST['nationality'];
					$email = $_POST['email'];
					$password = $_POST['password'];
					$strasse = $_POST['strasse'];
					$plz = $_POST['plz'];
					$ort = $_POST['ort'];
					$tel = $_POST['tel'];

					$berufsbezeichnung = $_POST['berufsbezeichnung'];
					$arbeitgeber = $_POST['arbeitgeber'];
					$ausbildung = $_POST['ausbildung'];
					$student = $_POST['student'];


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
							$table . "(Anrede, Nachname, Vorname, Geburtsdatum, Nationalitaet, EMail, Passwort, Telefon, Strasse, PLZ, Ort, Berufsbezeichnung, Arbeitgeber, Ausbildung, Student) " .
							"VALUES('".$anrede."', '". 
										$name."', '". 
										$vorname."', '". 
										$bday."', '". 
										$nationality."', '". 
										$email."', '". 
										md5($passwort)."', '". 
										$tel."', '". 
										$strasse."', '". 
										$plz."', '". 
										$ort."', '". 
										$berufsbezeichnung."', '". 
										$arbeitgeber."', '". 
										$ausbildung."', '". 
										$student. "')"; 
					mysql_query($sql);

					echo "Bestaetigung";

				}	
			?>		
			
		<?php 
			} 
		?>
	</body>

</html>