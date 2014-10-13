

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
				if($_POST['email'] == ''){
					
					$errors ['email'] = 'Fuellen Sie Bitte das Feld "E-Mail" ein.';
				
				}
				if($_POST['password'] == ''){
					
					$errors ['empasswordail'] = 'Fuellen Sie Bitte das Feld "Passwort" ein.';
				
				}
				if($_POST['tel'] == ''){
					
					$errors ['tel'] = 'Fuellen Sie Bitte das Feld "Telefon" ein.';
				
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
			}
		?>

		<?php
		
			if (count($_POST) == 0 || count($errors) > 0){
		
		?>


		
					
					<div class="register-box">
						<h2>Register <small> Please Register or <a href="../login.html">login</a></small></h2>
						<br/>
						<form class="form-horizontal" role="form" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
								
								<strong class="col-sm-2 control-label">*Anrede</strong <?php if (isset($errors['anrede'])) echo 'class="has-error" ';?>>
								<label class="radio-inline"> 
									<input type="radio" name="anrede" value="Frau" <?php if(isset($_POST['anrede'])) if($_POST['anrede'] == 'Frau') echo 'checked ' ;?>/>
									 Frau
									</label>
						
								<label class="radio-inline">
									<input type="radio" name="anrede" value="Herr" <?php if(isset($_POST['anrede'])) if($_POST['anrede'] == 'Herr') echo 'checked '; ?> />
									Herr
								</label>
							<br>
							<br>
							<div class="form-group form-group-sm">
								<label class="col-sm-2 control-label" for="regname">*Name</label>
								<div class="col-sm-10">
									<input type="text" name="name" id="regname" placeholder="Name" <?php if(count($_POST) > 0) if($_POST['name'] != '') echo 'value="' . $_POST['name'] . '" '; else echo 'class="has-error" ';?> />
								</div>
							</div>
							<div class="form-group form-group-sm">
								<label class="col-sm-2 control-label" for="regvorname">*Vorname</label> 
								<div class="col-sm-10">
									<input type="text" name="vorname" id="regvorname" placeholder="Vorname" <?php if(count($_POST) > 0) if($_POST['vorname'] != '') echo 'value="' . $_POST['vorname'] . '" '; else echo 'class="has-error" ';?> />
								</div>
							</div>
							<div class="form-group form-group-sm">
								<label class="col-sm-2 control-label" for="regemail" >*E-mail</label>
								<div class="col-sm-10">
									<input name="email" id="regemail" type="email" placeholder="muster@email.com"   <?php if(count($_POST) > 0) if($_POST['email'] != '') echo 'value="' . $_POST['email'] . '" '; else echo 'class="has-error"';?>/>
								</div>
							</div>
							<div class="form-group form-group-sm">
								<label class="col-sm-2 control-label" for="regpassword" >*Passwort</label>
								<div class="col-sm-10">
									<input  name="password" id="regpassword" type="password" placeholder="*********"   <?php if(count($_POST) > 0) if($_POST['password'] != '') echo 'value="' . $_POST['password'] . '" '; else echo 'class="has-error"';?>/>
								</div>
							</div>
							<div class="form-group form-group-sm">
								<label class="col-sm-2 control-label"  for="regtel" >Telefon</label>
								<div class="col-sm-10">
									<input name="tel" type="tel" id="regtel" placeholder="Telefon"   <?php if(count($_POST) > 0) if($_POST['tel'] != '') echo 'value="' . $_POST['tel'] . '" '; else echo 'class="has-error" ';?>/>
								</div>
							</div>
							<div class="form-group form-group-sm">
								<label class="col-sm-2 control-label" for="regstrasse">*Strasse</label>
								<div class="col-sm-10">
									<input type="text" name="strasse" id="regstrasse" placeholder="Strasse" <?php if(count($_POST) > 0) if($_POST['strasse'] != '') echo 'value="' . $_POST['strasse'] . '" '; else echo 'class="has-error" ';?> />
								</div>
							</div>
							<div class="form-group form-group-sm">
								<label class="col-sm-2 control-label" for="regplz">*PLZ</label>
								<div class="col-sm-10">
									<input type="text" name="plz" id="regplz" placeholder="PLZ" <?php if(count($_POST) > 0) if($_POST['plz'] != '') echo 'value="' . $_POST['plz'] . '" '; else echo 'class="has-error" ';?> />
								</div>
							</div>
							<div class="form-group form-group-sm">
								<label class="col-sm-2 control-label" for="regort">*Ort</label>
								<div class="col-sm-10">
									<input type="text" name="ort" id="regort" placeholder="Ort" <?php if(count($_POST) > 0) if($_POST['ort'] != '') echo 'value="' . $_POST['ort'] . '" '; else echo 'class="has-error" ';?> />
								</div>
							</div>
							
							
							
						<!--<label> 
								<a>Instrument: </a>
								<input type="text" name="instrument" placeholder="Instrument" <?php if(count($_POST) > 0) if($_POST['instrument'] != '') echo 'value="' . $_POST['instrument'] . '" '; ?> />
							</label>

							<br>
							<a <?php if(isset($errors['infos'])) echo 'class="error2" ';?>>*Informationen zu:</a>
							<br>
							<label>
								<input type="radio" name="infos" value="Anmelden" <?php if(isset($_POST['infos'])) if($_POST['infos'] == 'Anmelden') echo 'checked ' ;?>/> Anmelden
							</label>
							<br>
							<label>
								<input type="radio" name="infos" value="Abmelden" <?php if(isset($_POST['infos'])) if($_POST['infos'] == 'Abmelden') echo 'checked '; ?> /> Abmelden
							</label>
							<br>
							<label>
								<input type="radio" name="infos" value="Musik Lager" <?php if(isset($_GET['lager_anmeldung'])){ echo 'checked'; }elseif(isset($_POST['infos'])) if($_POST['infos'] == 'Musik Lager') echo 'checked '; ?> />
								Musik-Lager
							</label>
							<br>
							<label>
								<input type="radio" name="infos" value="weitere Informationen" <?php if(isset($_POST['infos'])) if($_POST['infos'] == 'weitere Informationen') echo 'checked '; ?> /> 
								weitere Informationen 
							</label>
						-->	
							<h5>*  Obligatorisch!</h5>
							<input class="btn btn-default button" type="submit" value="Senden" />
							
						</form>
					</div>
				</div>
		

			<?php
				if(count($errors) > 0){
					
					echo '<h3 class="has-error" >Um das Formular korrekt abzusenden: </h3>';
					
					foreach ($errors as $error){
						echo '<p class="has-error" >-' . $error . '<br/ ></p>';
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
					$name = $_POST['name'];
					$vorname = $_POST['vorname'];
					$email = $_POST['email'];
					$password = $_POST['password'];
					$tel = $_POST['tel'];
					$strasse = $_POST['strasse'];
					$plz = $_POST['plz'];
					$ort = $_POST['ort'];
					$bemerkung = $_POST['bemerkung'];


					// Systemeinstellungen 
					$id = "root"; 
					$pw = ""; 
					$host = "localhost"; 
					$database = "itprofi"; 
					$table = "register"; 

					// Einstellungen Ende 
					$conn_id = mysql_connect($host,$id,$pw); 
					mysql_select_db($database,$conn_id); 

					mysql_query("INSERT INTO $table VALUES(default, '$name', '$vorname', '$email', '$passwort', '$tel', '$strasse', '$plz', '$ort')");

					echo "Bestaetigung";
				}	
			?>		
			
		<?php 
			} 
		?>
	