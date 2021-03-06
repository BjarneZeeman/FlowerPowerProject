<?php 

class database{
    private $host;
    private $username;
    private $password; 
    private $database;
    private $dbh;

    public function __construct(){
        $this->host = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->database = 'flowerpower';

        try {

            $dsn = "mysql:host=$this->host;dbname=$this->database";
            $this->dbh = new PDO($dsn, $this->username, $this->password);

        } catch (PDOException $exception) {
            die("Connection failed!-> " . $exception.getMessage());
        }
    }

    public function select($statement, $named_placeholder){

        $sql = "SELECT username, password, email FROM users WHERE username = :uname ;"; // :uname is een named placeholder

        // prepared statement (send statement to server  + checks syntax)
        $statement = $this->dbh->prepare($statement);

        $statement->execute($named_placeholder);
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;

    }
}
?>