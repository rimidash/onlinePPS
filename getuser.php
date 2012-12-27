
<?php 
session_start(); 
?> 

<?php 
require_once("db_connect.inc");

$ausgabe="";
$result = mysql_query("SELECT username, shortcut, rang
FROM members")  or die ("MySQL-Error: " . mysql_error());


$j = 1;
while($fetch = mysql_fetch_array($result, MYSQL_NUM)) {
	
	$j++;
	$ausgabe.="<tr>";
	
	
	


for($i=0;$i<=count($fetch)-1;$i++) {
		
		$ausgabe .= "<td>" . $fetch[$i] . "</td>";
	}
	$ausgabe.="</tr>";


}
echo $ausgabe;




?>