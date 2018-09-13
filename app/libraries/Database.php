<?php
  /*
   * PDO Database Class
   * Connect to database
   * Create prepared statements
   * Bind values
   * Return rows and results
   */
  class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $dbh;
    private $stmt;
    private $error;

    public function __construct(){
      // Set DSN
      $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
      $options = array(
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      );

      // Create PDO instance
      try{
        $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
      } catch(PDOException $e){
        $this->error = $e->getMessage();
        echo $this->error;
      }
    }
    // prepare statment with query
    public function query($sql){
      $this->stmt = $this->dbh->prepare($sql);
    }

    //bind values
    public function bind($param,$type=NULL,$value){
      if(is_null($type)){
        switch(true){
          case is_int(value) :
          $type =PDO::PARAM_INT;
          break;
          case is_bool(value) :
          $type =PDO::PARAM_BOOL;
          break;
          case is_null(value) :
          $type =PDO::PARAM_NULL;
          break;
          default :
          $type =PDO::PARAM_STR;
        }
      }
      $this->stmt->bindValue($param,$value,$type);
    }
    //execyte the prepared statement
    public function execute(){
      return $this->stmt->execute();
    }

    //get  result as array of objs
    //fetches all record as obj
    public function resultSet(){
      $this->execute();
      return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }
    //fetches only one line of record as obj
    public function single(){
      $this->execute();
      return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
    public function rowCount(){
      return $this->stmt->rowCount();
    }
  }