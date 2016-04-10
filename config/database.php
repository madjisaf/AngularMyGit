<?php class Database{ 
 private $host = "localhost"; // nom de la base de données.
 private $db_name = "crud_angular_db"; 
 private $username = "root"; 
 private $password = ""; 
 public $conn; 


 public function getConnection(){ 
 
		$this->conn = null;
         
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
         
        return $this->conn;
    }
}
?>