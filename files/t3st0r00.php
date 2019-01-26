<?php

class  Dbclass {
private $servername;
  private $username;
  private $password;
  private $dbname;
  private $charset;
  
  public function connect(){
  $this->servername = "localhost";
    $this->username = "root";
    $this->password = "123456";
    $this->dbname = "testdb";
    $this->charset = "utf8mb4";
    
    try {
    $dns = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".#this->charset;
      $pdo = new PDO ($dns, $this->username, $this->password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $pdo;
    }catch (\PDOException $e){
    echo "Connection failed: ".$e->getMessage();
    }
  }
}
?>
