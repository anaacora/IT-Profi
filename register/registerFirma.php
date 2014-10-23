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



					<div class="register-box">
						<h2>Register <small> Please Register or <a href="../login/login.php">login</a></small></h2>
						<br/>											<!--Muss noch zu register.php#/firma geleitet werden -->
						<form class="form-horizontal" role="form" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
							<div class="form-group form-group-sm">
								<label class="col-sm-3 control-label" for="regfname">*Name der Firma</label>
								<div class="col-sm-9">
									<input type="text" name="name" id="regfname" placeholder="Name" <?php if(count($_POST) > 0) if($_POST['name'] != '') echo 'value="' . $_POST['name'] . '" '; else echo 'class="has-error" ';?> />
								</div>
							</div>
							<div class="form-group form-group-sm">
								<label class="col-sm-3 control-label"  for="refgtel" >Telefon</label>
								<div class="col-sm-9">
									<input name="tel" type="tel" id="refgtel" placeholder="Telefon"   <?php if(count($_POST) > 0) if($_POST['tel'] != '') echo 'value="' . $_POST['tel'] . '" '; else echo 'class="has-error" ';?>/>
								</div>
							</div>
							<div class="form-group form-group-sm">
								<label class="col-sm-3 control-label" for="regstrasse">*Strasse</label>
								<div class="col-sm-9">
									<input type="text" name="strasse" id="regstrasse" placeholder="Musterstrasse 20" <?php if(count($_POST) > 0) if($_POST['strasse'] != '') echo 'value="' . $_POST['strasse'] . '" '; else echo 'class="has-error" ';?> />
								</div>
							</div>
							<div class="form-group form-group-sm">
								<label class="col-sm-3 control-label" for="regfplz">*PLZ</label>
								<div class="col-sm-9">
									<input type="text" name="plz" id="regfplz" placeholder="Zürich" <?php if(count($_POST) > 0) if($_POST['plz'] != '') echo 'value="' . $_POST['plz'] . '" '; else echo 'class="has-error" ';?> />
								</div>
							</div>
							<div class="form-group form-group-sm">
								<label class="col-sm-3 control-label" for="regfort">*Ort</label>
								<div class="col-sm-9">
									<input type="text" name="ort" id="regfort" placeholder="8004" <?php if(count($_POST) > 0) if($_POST['ort'] != '') echo 'value="' . $_POST['ort'] . '" '; else echo 'class="has-error" ';?> />
								</div>
							</div>
							<div class="form-group form-group-sm">
								<label class="col-sm-3 control-label" for="regfemail" >*E-mail</label>
								<div class="col-sm-9">
									<input name="email" id="regfemail" type="email" placeholder="muster@email.com"   <?php if(count($_POST) > 0) if($_POST['email'] != '') echo 'value="' . $_POST['email'] . '" '; else echo 'class="has-error"';?>/>
								</div>
							</div>
							<div class="form-group form-group-sm">
								<label class="col-sm-3 control-label" for="regfpassword" >*Passwort</label>
								<div class="col-sm-9">
									<input  name="password" id="regfpassword" type="password" placeholder="*********"   <?php if(count($_POST) > 0) if($_POST['password'] != '') echo 'value="' . $_POST['password'] . '" '; else echo 'class="has-error"';?>/>
								</div>
							</div>
							<div class="form-group form-group-sm">
								<label class="col-sm-3 control-label" for="regbfild">*Firmenlogo: </label>
								<div class="col-sm-9">
									<input type="file" name="profileimg" id="regfbild" placeholder="Name" <?php if(count($_POST) > 0) if($_POST['profileimg'] != '') echo 'value="' . $_POST['profileimg'] . '" '; else echo 'class="has-error" ';?> />
									<p class="help-block">Bitte Firmenlogo Oder Bild Ihrer Firma max ...x....</p>
								</div>
							</div>
							<div class="form-group form-group-sm">
								<label class="col-sm-8 control-label" for="regdienst">*Beschreibung der Dienstleistungen</label>
								<div class="col-sm-12">
									<textarea name="dienstleistungen" id="regdienst" class="form-control" rows="3"><?php if(isset($_POST['dienstleistungen']))echo @$_POST['dienstleistungen']; ?> </textarea>
								</div>
							</div>
							<br>
							<div class="form-group form-group-sm">
								<label class="col-sm-8 control-label" for="regsuchenach">*Auf der Suche nach...</label>
								<div class="col-sm-12">
									<textarea name="suchenach" id="regsuchenach" class="form-control" rows="3"><?php if(isset($_POST['suchenach']))echo @$_POST['suchenach']; ?></textarea>
								</div>
							</div>
							
						
							<h5>*  Obligatorisch!</h5>
							<input class="btn btn-default button" type="submit" value="Senden" />
							
						</form>
					</div>



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
										md5($password)."', '". 
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
										md5($password). "')"; 
					mysql_query($sql_log);
					echo "Bestaetigung";

				}	
			?>		
			
		<?php 
			} 
		?>