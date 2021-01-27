<html>
<head>
<style>

html {
  overflow: hidden;
}

body {
  background-image: url('bloemenwinkel.png');
}

.sidenav {
  height: 100%;
  width: 180px;
  position: fixed;
  top: 0;
  left: 0;
  background-color: #726FAB;
}

.uppernav {
  height: 100px;
  width: 100%;
  position: fixed;
  font-family: cursive;
  top: 0;
  left: 0;
  background-color: #726FAB;
  margin-left: 180px;
}

.uppernav h2 {
  padding: 15px 0 30px 33%;
  color: #8BDAD9;
}

.sidenav a {
  padding: 5px 0 30px 8px;
  text-decoration: none;
  font-family: cursive;
  font-size: 15px;
  color: #8BDAD9;
  display: block;
}

.sidenav a:hover {
  color: #FFFFFF;
}

.body {
  margin-left: 185px;
  font-size: 28px;
  padding: 100px 0px;
  font-family: cursive;
  color: white;
}

.wrapper {  
  margin-top: 180px;
}

.loginForm {
  max-width: 180px;
  padding: 10px 40px 40px;
  margin: 0 auto;
  background-color: #726FAB;
  border: 1px solid rgba(0,0,0,0.1);  
}

.button {
  padding: 5px 44px 5px;
  margin-left: 10px;
}

.formRegister {
  padding: 0px 0px 0px;
  margin-left: 10px;
}

</style>
</head>
<body>
  <div class="wrapper">
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
  <a href="index.php"><img src="bloemboeket.png" width="180" height="180"></a>
  <a href="loginEmployee.php">Inloggen medewerkers</a>
  <a href="loginCustomer.php">Inloggen klanten</a>
  <a href="contact.php">Contactpagina</a>
  <a href="register.php">Registreren</a>
</div>
<div class="uppernav">
  <h2>Flower Power</h2>
</div>

<div class="body">

</div>
   
</body>
</html> 