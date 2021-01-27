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

</style>
</head>
<body>

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
  Bedrijf: Flower Power<br>
  Adres: Bloemenlaan 367, 1234 AB Amsterdam<br>
  e-mail: info@flowerpower.nl<br>
  Tel: +31 (0)12 3456789
</div>
   
</body>
</html> 