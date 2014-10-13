<link rel="stylesheet" href="zebra.css">

<?php
 
$titel=$_REQUEST['titel'];
$inhalt=$_REQUEST['inhalt'];
$preis=$_REQUEST['preis'];

$action=$_GET['action'];

$nr=$_GET['nr'];
$PHP_SELF=$_SERVER['PHP_SELF'];



/*create table artikel 
( 
nr INT NOT NULL AUTO_INCREMENT, 
titel character (255), 
inhalt text, 
preis decimal(6,2),
PRIMARY KEY (nr) 
);
*/





// Systemeinstellungen 
$id = "root"; 
$pw = ""; 
$host = "localhost"; 
$database = "test"; 
$table = "artikel"; 

// Einstellungen Ende 

$conn_id = mysql_connect($host,$id,$pw); 
mysql_select_db($database,$conn_id); 

// Löscht einen Artikel aus der Datenbank 
if ($action == "loeschen") { 
mysql_query("delete from $table where nr = '$nr'"); 
$meldung = "Der Artikel wurde gelöscht.";

// Aktualisiert einen Datensatz 
} elseif($action == "save") {
mysql_query("update $table set titel = '$titel',  inhalt = '$inhalt', preis = '$preis' where nr = '$nr'");
$meldung = "Der Artikel wurde upgedated.";

// Fügt einen neuen Artikel hinzu
} elseif ($action == "neu") {
mysql_query ("insert into $table (titel, inhalt, preis) VALUES
('$titel', '$inhalt', '$preis')");
$meldung = "Der Artikel wurde hinzugefügt.";

// Selektiert den ausgewählten Artikel zum Updaten 
} elseif ($action == "update") { 

$result = mysql_query("select * from $table where nr = '".$nr."'"); 
$titel = mysql_result($result,0,"titel"); 
$inhalt = mysql_result($result,0,"inhalt"); 
$preis = mysql_result($result,0, "preis");

?> 

<table> 
<form action=<?php echo $PHP_SELF; ?> method="get"> 
<input type=hidden name=action value="save"> 
<input type=hidden name=nr VALUE="<?php echo $nr ?>"> 
<tr> 
<td>Titel</td> 
<td><input type=text name="titel" value="<?php echo $titel ?>"></td> 
</tr><tr> 
<td>Text</td> 
<td><textarea name="inhalt"><?PHP echo $inhalt ?></textarea></td> 
</tr><tr> 
<td><input type=zahl name="preis" value="<?php echo $preis ?>"></td>
</tr><tr> 
<td> </td> 
<TD><input type=submit value="Artikel Updaten"></form></td> 
</tr> 
</table><p> 

<?php 

// Formular für ein neues Produkt 
} elseif($action == "formneu" ) { 

?> 
<table> 
<form action=<?php echo $PHP_SELF; ?> method="get"> 
<input type=hidden name=action value="neu"> 
<tr> 
<td>Titel</td> 
<td><input type=text name="titel"></td> 
</tr><tr> 
<td>Text</td> 
<td><textarea name="inhalt"></textarea></td> 
</tr><tr> 
<td>Preis</td>
<td><input type=zahl name="preis"></td>
</tr><tr> 
<td> </td> 
<TD><input type=submit value="Neuen Artikel hinzufügen"></form></td> 
</tr> 
</table><p> 

<?php 
// Gibt alle Datensätze aus der Datenbank aus. 
} else { 

if (!$meldung) $meldung = "Optionen<P>"; 
echo "$meldung"; 
echo "<ol class='zebra'><b>Alle Artikeln in Übersicht:</b> "; 

$result = mysql_query("select * from $table"); 
if ($num = mysql_num_rows($result)) { 
// Ausgabe der Datensätze, wenn vorhanden 
for($i=0;$i < $num; $i++) { 
$nr = mysql_result($result,$i,"nr"); 
$titel = mysql_result($result,$i,"titel"); 
echo "<li> $titel - <A
href=$PHP_SELF?nr=$nr&action=update>Update</A>"; 
echo "- <a
href=$PHP_SELF?nr=$nr&action=loeschen>Löschen</a></li>"; 
} 
} else echo "<li>Es gibt keine Datensätze in der Datenbank<p>"; 
echo "</ol>"; 
} 
echo "<p><a href=$PHP_SELF>Zur Startseite</a>"; 
echo " - <a href=$PHP_SELF?action=formneu>Neuen Artikel einfügen</a>"; 

?>
