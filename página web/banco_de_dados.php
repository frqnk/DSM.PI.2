<?php
  class DBConnect {
    private $servername = "127.0.0.1";
    private $username = "root";
    private $password = "";
    private $dbname = "Tecnobroccoli";
    private $conn = NULL;

    public function __construct() {
      try {
        $dsn = "mysql: host=$this->servername; dbname=$this->dbname";
        $this->conn = new PDO($dsn, $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
      catch (PDOException $e) {
        echo "Erro ao conectar: ".$e->getMessage();
      }
    }

    public function __destruct() {
      $this->conn = NULL;
    }
  }
?>