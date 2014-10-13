<?php 
// Definition der Benutzer 
$benutzer[0]["Nickname"] ="adm_anaa"; 
$benutzer[0]["Kennwort"] = "adminAProfi"; 
$benutzer[0]["Nachname"] = "Cora"; 
$benutzer[0]["Vorname"] = "Anastasia"; 

$benutzer[1]["Nickname"] = "adm_mano"; 
$benutzer[1]["Kennwort"] = "adminMProfi"; 
$benutzer[1]["Nachname"] = "Speck"; 
$benutzer[1]["Vorname"] = "Mano"; 

// Sie können an dieser Stelle beliebig viele Benutzer anlegen. 
// Achten Sie dabei nur auf die Fortführung der Nummer. 

// Aufbau der Datenbankverbindung 
$connectionid  = mysql_connect ("localhost", "root", ""); 
if (!mysql_select_db ("ItProfi", $connectionid)) 
{ 
  die ("Keine Verbindung zur Datenbank"); 
} 

// Zuerst alle Datensätze löschen um keine Dopplungen zu bekommen. 
mysql_query ("DELETE FROM login"); 

// Daten eintragen 
while (list ($key, $value) = each ($benutzer)) 
{ 
  // SQL-Anweisung erstellen 
  $sql = "INSERT INTO ". 
    "login (Nickname, Kennwort, Nachname, Vorname) ". 
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