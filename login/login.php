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