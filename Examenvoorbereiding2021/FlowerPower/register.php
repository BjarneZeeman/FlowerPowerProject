<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="registerStyle">
    <form method="POST" class="loginForm">       
      <h2 class="form-signin-heading">&nbsp&nbsp&nbsp&nbspRegistreren</h2>

      <input type="text" class="formRegister" name="voorletter" placeholder="Voorletter" maxlength="1" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required autofocus/><br><br>

      <input type="text" class="formRegister" name="tussenvoegsel" placeholder="Tussenvoegsel" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" /><br><br>

      <input type="text" class="formRegister" name="achternaam" placeholder="Achternaam" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required/><br><br>

      <input type="text" class="formRegister" name="adres" placeholder="Adres" required/><br><br>

      <input type="text" class="formRegister" name="postcode" placeholder="Postcode" required/><br><br>

      <input type="text" class="formRegister" name="woonplaats" placeholder="Woonplaats" required/><br><br>

      <input type="text" class="formRegister" name="geboortedatum" placeholder="Geboortedatum" required/><br><br>

      <input type="gebruikersnaam" class="formRegister" name="gebruikersnaam" placeholder="Gebruikersnaam" required /><br><br>

      <input type="password" class="formRegister" name="password" placeholder="Password" required=""/><br><br>

      <button class="button" type="submit">Registreren</button>   
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