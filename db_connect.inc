<?php 
$verbindung = mysql_connect("mysqlsvr30.world4you.com", "boxofsolutionsat" , "99infy8") 
or die("Verbindung zur Datenbank konnte nicht hergestellt werden"); 
mysql_select_db("boxofsolutionsatdb4") or die ("Datenbank konnte nicht ausgewählt werden"); 

$username = $_POST["myusername"]; 
$passwort = $_POST["mypassword"]; 
?>
