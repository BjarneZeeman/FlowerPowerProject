<?php

class database {

    private $host;
    private $dbh;
    private $user;
    private $pass;
    private $db;

    function __construct(){
        $this->host = 'localhost';
        $this->user = 'root';
        $this->pass = '';
        $this->db = 'flowerpower';

        try{
            $dsn = "mysql:host=$this->host;dbname=$this->db";
            $this->dbh = new PDO($dsn, $this->user, $this->pass);
        }catch(PDOException $e){
            die("Unable to connect: " . $e->getMessage());

        }
    }

        function insertCustomerUser($gebruikersnaam, $wachtwoord){
            $sql = "INSERT INTO klant(klantcode, gebruikersnaam, wachtwoord) VALUES (:id, :username, :password)"; 

            $stmt = $this->dbh->prepare($sql);
            $stmt->execute([
                'id'=>NULL,
                'username'=>$username,
                'password'=>password_hash($password, PASSWORD_DEFAULT)
            ]);
        }

        function insertEmployeeUser($gebruikersnaam, $wachtwoord){
            $sql = "INSERT INTO medewerker(medewerkerscode, gebruikersnaam, wachtwoord) VALUES (:id, :username, :password)"; 

            $stmt = $this->dbh->prepare($sql);
            $stmt->execute([
                'id'=>NULL,
                'username'=>$username,
                'password'=>password_hash($password, PASSWORD_DEFAULT)
            ]);
        }
}

?>