<?php session_start (); ?> 
<!DOCTYPE HTML>
<html>
	<head>
		<title>IT-Profi</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="../css/main.css">

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
						<h2>Login <small> Please login first or <a href="https://www.google.ch">register</a></small></h2>
						<br/>
						<form role="form" action="login.php" method="post">
						  <div class="form-group">
						    <label for="loginEmail">Email address</label>
						    <input type="text" class="form-control" id="loginEmail" name="name" placeholder="Enter email">
						  </div>
						  <div class="form-group">
						    <label for="loginPassword">Password</label>
						    <input type="password" class="form-control" id="loginPassword" name="pwd" placeholder="Password">
						  </div>
						    <label>
						      <input type="checkbox"> Check me out
						    </label>
						    <br/>
						  <button type="submit" class="btn btn-default" value="Login">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>