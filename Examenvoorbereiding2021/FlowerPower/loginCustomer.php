<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="wrapper">
    <form method="POST" class="loginForm" action="klant.php">
      <input type="gebruikersnaam" class="formGebruikersnaam" name="gebruikersnaam" placeholder="Gebruikersnaam" required autofocus /><br><br>
      <input type="password" class="formPassword" name="password" placeholder="Password" required=""/><br><br>
      <button class="button" type="submit">Login</button>   
    </form>
  </div>

<div class="sidenav">
  <a href="index.php"><img src="bloem.png" width="125" height="125"></a>
  <a href="loginEmployee.php">Inloggen medewerkers</a>
  <a href="loginCustomer.php">Inloggen klanten</a>
  <a href="contact.php">Contactpagina</a>
  <a href="register.php">Registreren</a>
</div>

<div class="uppernav">
  <h1>Flower Power</h1>
</div>

<div class="body">
  
</div>
   
</body>
</html>

<?php
include "database.php";

$gebruikersnaam = $_POST["gebruikersnaam"];
$wachtwoord = $_POST["password"];

$myConn = new DB;

$query = "SELECT * FROM klant WHERE gebruikersnaam = '$gebruikersnaam' AND wachtwoord = '$wachtwoord'";

$result = $myConn->executeSQL($query);

gettype($result);

if (!empty($result)) {
  include 'medewerker2.php';   
} else {
    echo "<br> Invalid login! <br>";
}

?>