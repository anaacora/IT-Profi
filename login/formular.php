<?php session_start (); ?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>IT-Profi</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../login/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../login/css/main.css">

<<<<<<< HEAD
  </head>
  <body class="login">
  	<?php 
=======
<<<<<<< HEAD
	</head>
	<body class="login">
		<?php 
>>>>>>> origin/master
			if (isset ($_REQUEST["fehler"])) 
			{ 
			  echo "Die Zugangsdaten waren ungültig."; 
			} 
		?> 
<<<<<<< HEAD
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="title">
            <h1>IT-Profi</h1>
          </div>
          <div class="login-box">
            <h2>Login <small> Please login first or <a href="./register/register.php">register</a></h2>
            <br/>
            <form role="form">
              <div class="form-group">
                <label class="label-control" for="loginEmail">Email address</label>
                <input type="email" class="form-control" id="loginEmail" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label class="label-control" for="loginPassword">Password</label>
                <input type="password" class="form-control" id="loginPassword" placeholder="Password">
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
=======
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
=======
<body> 
<?php 
if (isset ($_REQUEST["fehler"])) 
{ 
  echo "Die Zugangsdaten waren ungültig."; 
} 
?> 
<form action="login.php" method="post"> 
  Email: <input type="email" name="email" size="20"><br> 
  Kennwort: <input type="password" name="pwd" size="20"><br> 
  <input type="submit" value="Login"> 
</form> 
</body> 
</html> 
>>>>>>> origin/anaa
>>>>>>> origin/master
