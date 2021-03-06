<?php

class Database{

    protected $databaseHandler;
    protected $statement;

    public function __construct(){
        
        try{
        $this->databaseHandler = new PDO('mysql:host=' . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        } catch(PDOException $e) {
            echo 'Connection failed: '. $e->getMessage();
        }
    }


    public function query($query){

        $this->statement = $this->databaseHandler->prepare($query);

    }

    public function lastInserted()
    {
        return $this->databaseHandler->lastInsertId();
    }

  
    public function bind($param, $value, $type = PDO::PARAM_STR){
        $this->statement->bindValue($param, $value, $type);
    }

    public function execQuery()
    {
        $this->statement->execute();
    }

    public function resultSet()
    {
        $this->execQuery();
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function singleEntry(){
        $this->execQuery();
        return $this->statement->fetch(PDO::FETCH_ASSOC); //only 1 record
    }

}