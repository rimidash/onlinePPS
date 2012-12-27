
<?php 
session_start(); 
?> 

<?php 



require_once("db_connect.inc");



$abfrage = "SELECT username, password , rang FROM members WHERE username LIKE '$username' LIMIT 1"; 
$ergebnis = mysql_query($abfrage); 
$row = mysql_fetch_object($ergebnis); 




if($row->password == md5($passwort))
    {
    $_SESSION["username"] = $username;
    $_SESSION["rang"] = $row->rang; 
    if($row->rang == "Administrator") {
    header("location:admin.php");
    }
    else {
    	header("location:main.php");
    	}
    }


else 
    {

    //	header ("location:error.html");
    	
    echo "Benutzername und/oder Passwort waren falsch. <a href=\"index.html\">Login</a>"; 
    } 

?>
