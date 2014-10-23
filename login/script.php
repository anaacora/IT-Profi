<?php 
// Definition der Benutzer 
$benutzer[0]["EMail"] ="anastasia.cora@gmail.com"; 
$benutzer[0]["Kennwort"] = "adminAnaa";

$benutzer[1]["EMail"] = "mano.speck@gmx.net"; 
$benutzer[1]["Kennwort"] = "adminMano";

// Sie können an dieser Stelle beliebig viele Benutzer anlegen. 
// Achten Sie dabei nur auf die Fortführung der Nummer. 

// Aufbau der Datenbankverbindung 
$connectionid  = mysql_connect ("localhost", "root", ""); 
if (!mysql_select_db ("ItProfi", $connectionid)) 
{ 
  die ("Keine Verbindung zur Datenbank"); 
} 

// Daten eintragen 
while (list ($key, $value) = each ($benutzer)) 
{ 
  // SQL-Anweisung erstellen 
  $sql = "INSERT INTO ". 
    "login (EMail, Kennwort) ". 
  "VALUES ('".$value["EMail"]."', '". 
              md5 ($value["Kennwort"]). "')"; 
  mysql_query ($sql); 

  if (mysql_affected_rows ($connectionid) > 0) 
  { 
    echo "Benutzer erfolgreich angelegt.<br>\n"; 
  } 
  else 
  { 
   echo "Fehler beim Anlegen der Benutzer.<br>\n"; 
  } 
} 
?>