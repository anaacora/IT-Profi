<?php 
// Definition der Benutzer 
$benutzer[0]["Nickname"] ="admin"; 
$benutzer[0]["Kennwort"] = "admin"; 
$benutzer[0]["Nachname"] = "Mustermann"; 
$benutzer[0]["Vorname"] = "Max"; 

$benutzer[1]["Nickname"] = "test"; 
$benutzer[1]["Kennwort"] = "abc"; 
$benutzer[1]["Nachname"] = "Kunze"; 
$benutzer[1]["Vorname"] = "Martin"; 

// Sie können an dieser Stelle beliebig viele Benutzer anlegen. 
// Achten Sie dabei nur auf die Fortführung der Nummer. 

// Aufbau der Datenbankverbindung 
$connectionid  = mysql_connect ("localhost", "root", ""); 
if (!mysql_select_db ("LoginSystem", $connectionid)) 
{ 
  die ("Keine Verbindung zur Datenbank"); 
} 

// Zuerst alle Datensätze löschen um keine Dopplungen zu bekommen. 
mysql_query ("DELETE FROM benutzerdaten"); 

// Daten eintragen 
while (list ($key, $value) = each ($benutzer)) 
{ 
  // SQL-Anweisung erstellen 
  $sql = "INSERT INTO ". 
    "benutzerdaten (Nickname, Kennwort, Nachname, Vorname) ". 
  "VALUES ('".$value["Nickname"]."', '". 
                       md5 ($value["Kennwort"])."', '". 
                       $value["Nachname"]."', '". 
                       $value["Vorname"]."')"; 
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