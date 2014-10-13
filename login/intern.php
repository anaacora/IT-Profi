<?php 
include ("checkuser.php"); 
?> 
<html> 
<head> 
  <title>Interne Seite</title> 
</head> 
<body> 
  BenutzerId: <?php echo $_SESSION["user_id"]; ?><br> 
  EMail: <?php echo $_SESSION["user_email"]; ?><br> 
  <hr> 
  <a href="logout.php">Ausloggen</a> 
</body> 
</html> 