<?php
  class Database{
    private $host = 'fittraindb.mysql.database.azure.com:3306';
    private $user = 'fittrain@fittraindb';
    private $pass = 'Train3435';
    private $dbname = 'proj3pet';

    public $conn;

    function connect(){
      $this->conn = null;
      try{
        $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->pass);
      }
      catch(PDOException $exception){
        echo "Connection error: ".$exception->getMessage();
      }

      return $this->conn;
    }

    public function bind($param, $value, $type = null){
      if(is_null ($type)){
        switch(true){
          case is_int ($value) :
            $type = PDO::PARAM_INT;
            break;
          case is_int ($value) :
            $type = PDO::PARAM_BOOL;
            break;
          case is_null ($value) :
            $type = PDO::PARAM_NULL;
            break;
          default :
            $type = PDO::PARAM_STR;
        }
      }

      $this->stmt->bindValue($param, $value, $type);
    }
  }
?>