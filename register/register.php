<html ng-app="itProfiApp">
<!--Registrierung Seite ohne Inhalt -->
	<head>
		<title>IT-Profi</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="../css/main.css">
	</head>
	
	<body class="register">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="title">
						<h1>IT-Profi</h1>
					</div>
					<ul class="nav nav-tabs nav Justified" role="tablist">
						<li class="active"><a href="#/">Einzelperson</a></li> 
						<li><a href="#/firma">Firma</a></li>
					</ul>
					<div ng-view></div><!-- Hier kommt der Inhalt rein mit AngularJS-->
					
					
				</div>
			</div>
		</div>
	</body>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.14/angular.js"></script>
  	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.14/angular-animate.js"></script>
 	 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.14/angular-route.js"></script>
 	 <script src="../javascript/app.js"></script>
</html>