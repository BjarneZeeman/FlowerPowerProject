<?php
include "database.php";

$gebruikersnaam = $_POST["gebruikersnaam"];
$wachtwoord = $_POST["password"];

$myConn = new DB;

$query = "SELECT * FROM klant WHERE gebruikersnaam = '$gebruikersnaam' AND wachtwoord = '$wachtwoord'";

$result = $myConn->executeSQL($query);

gettype($result);

if (!empty($result)) {
  include 'klant2.php';   
} else {
    echo "<br> Invalid login! <br>";
}
?>