<!DOCTYPE html >
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>BC Online PPS</title>
<link rel="stylesheet" href="style.css" type="text/css" /> 
<script type="text/javascript" src="jui/js/jquery-1.8.3.js"></script>
</head>
<body>

<div id="all">
<div id="header">
<img src="img/logo.jpg">
</img>
</div>


<div id="navleiste">
<div id="titlebar">Administration - User</div>
<ul id="nav">
  <li><a href="#">Ausloggen</a></li>
  <li><a href="#">Kategorien verwalten</a></li>
  <li><a href="#">Maßnahmen verwalten</a></li>
  <li><a href="#">User verwalten</a></li>
  <li><a href="#">Zur Seite</a></li>
</ul>


<div id="pps">
<input type="submit" class="logButton" name="addUser" value="+ User" onclick="$('#addForm').show('slow')" />
<form class="form" id="addForm">
<input class="login" name="name" placeholder="Name" type="text" id="name" /> 
<input class="login" name="kuerzel" placeholder="Kürzel" type="text" id="kuerzel" /> 
<input class="login" name="rang" placeholder="Rang" type="text" id="rang" /> 
<input class="login" name="passwd" placeholder="Passwort" type="password" id="passwd" /> 
<br />
<input type="submit" class="logButton" name="sendAddUser" value="Absenden" />
<input type="submit" class="logButton" name="cancelAddUser" value="Abbrechen" onclick="$('#addForm').hide('slow')"/>
</form>


<table class="usertable">

<thead>
<th>Name</th>
<th>Kürzel</th>
<th>Rang</th>
</thead>

<tbody>
<?php
include('getuser.php');
?>

</tbody>


</table>



</div>


</div>




</div>
</body>
</html>