<?php 
// Session starten 
session_start (); 

// Datenbankverbindung aufbauen 
$connectionid = mysql_connect ("localhost", "root", ""); 
if (!mysql_select_db ("ItProfi", $connectionid)) 
{ 
  die ("Keine Verbindung zur Datenbank"); 
} 

$sql = "SELECT ". 
    "Id, Nickname, Nachname, Vorname ". 
  "FROM ". 
    "login ". 
  "WHERE ". 
    "(Nickname like '".$_REQUEST["name"]."') AND ". 
    "(Kennwort = '".md5 ($_REQUEST["pwd"])."')"; 
$result = mysql_query ($sql); 

if (mysql_num_rows ($result) > 0) 
{ 
  // login in ein Array auslesen. 
  $data = mysql_fetch_array ($result); 

  // Sessionvariablen erstellen und registrieren 
  $_SESSION["user_id"] = $data["Id"]; 
  $_SESSION["user_nickname"] = $data["Nickname"]; 
  $_SESSION["user_nachname"] = $data["Nachname"]; 
  $_SESSION["user_vorname"] = $data["Vorname"]; 

  header ("Location: intern.php"); 
} 
else 
{ 
  header ("Location: formular.php?fehler=1"); 
} 
?> 

<!DOCTYPE HTML>
<html>
  <head>
    <title>IT-Profi</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../login/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../login/css/main.css">

  </head>
  <body class="login">
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