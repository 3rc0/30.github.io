<?php

class  Dbclass {
private $servername;
  private $username;
  private $password;
  private $dbname;
  private $charset;
  
  public function connect(){
  $this->servername = "sql9.freemysqlhosting.net";
    $this->username = "sql9275392";
    $this->password = "jfMir2Xm4v";
    $this->dbname = "sql9275392";
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
