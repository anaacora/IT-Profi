<html>

	<head>

	</head>
	
	<body>

		<?php
			
			$errors = array();
			if(count($_POST) > 0){
				
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



		<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
				
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

					mysql_query("INSERT INTO $table (Berufsbezeichnung, Arbeitgeber, Ausbildung, Student) VALUES('$berufsbezeichnung', '$arbeitgeber', '$ausbildung', '$student')");

					echo "Bestaetigung";
				}	
			?>		
			
		<?php 
			} 
		?>
	</body>

</html>