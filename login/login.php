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
    "Id, EMail ".
  "FROM ".
    "login ".
  "WHERE ".
    "(EMail like '".$_REQUEST["email"]."') AND ".
    "(Kennwort = '".md5 ($_REQUEST["pwd"])."')";
$result = mysql_query ($sql);
if (mysql_num_rows ($result) > 0)
{
  // login in ein Array auslesen.
  $data = mysql_fetch_array ($result);
 
  // Sessionvariablen erstellen und registrieren
  $_SESSION["user_id"] = $data["Id"];
  $_SESSION["user_email"] = $data["EMail"];
 
  header ("Location: intern.php");
}
else
{
  header ("Location: formular.php?fehler=1");
}
?>
