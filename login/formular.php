<?php session_start (); ?> 
<!DOCTYPE HTML>
<html>
	<head>
		<title>IT-Profi</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="./css/main.css">

	</head>
	<body class="login">
		<?php 
			if (isset ($_REQUEST["fehler"])) 
			{ 
			  echo "Die Zugangsdaten waren ungültig."; 
			} 
		?> 
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="title">
						<h1>IT-Profi</h1>
					</div>
					<div class="login-box">
						<h2>Login <small> Please login first or <a href="./register/register_personal.php">register</a></h2>
						<br/>
						<form action="login.php" role="form" method="post">
						  <div class="form-group">
						    <label class="label-control" for="email">Email address</label>
						    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
						  </div>
						  <div class="form-group">
						    <label class="label-control" for="pwd">Password</label>
						    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
						  </div>
						    <label>
						      <input type="checkbox"> Check me out
						    </label>
						    <br/>
						  <button type="submit" class="btn btn-default">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>