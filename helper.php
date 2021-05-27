<?php
require_once 'constants.php';
require 'dbConnection.php';

class Helper{

   private $db;
   public function __construct() {
    $this->db = new Database();
  }

    public function getAllUsers()
    {
        $this->db->query('SELECT * FROM users');
        return $this->db->resultSet();
    }

    public function getAllProductCategories()
    {
        $this->db->query('SELECT category FROM products GROUP BY category');
        $categories = $this->db->resultSet();
        $categories = array_column($categories,'category');
        return $categories;
    }

    public function getAllProductsFromCategory($categoryName)
    {
        $this->db->query("SELECT * FROM products where category = '$categoryName'");
        return $this->db->resultSet();
    }

    public function getProductById($id)
    {
        $this->db->query("SELECT * FROM products where id = $id");
        return $this->db->singleEntry();
    }

    public function insertUser($postValues){

        $passwordHash = sha1($postValues['pwd']);

        $this->db->query('INSERT INTO users (full_name, username, email, phone, password) VALUES(:fullName, :name, :email, :phone, :password)');


        $this->db->bind(':fullName', $postValues['full-name'], PDO::PARAM_STR);
        $this->db->bind(':name', $postValues['uname'], PDO::PARAM_STR);
        $this->db->bind(':email', $postValues['email'], PDO::PARAM_STR);
        $this->db->bind(':phone', $postValues['phone-number'], PDO::PARAM_STR);
        $this->db->bind(':password', $passwordHash, PDO::PARAM_STR);
        $this->db->execQuery();

       return $this->db->lastInserted();
    }

   public function checkCredentials($creds)
    {
        $passwordHash = sha1($creds['password']);
        $this->db->query('SELECT * FROM users WHERE username = :username AND password = :pwd');
        $this->db->bind(':username', $creds['uname']);
        $this->db->bind(':pwd', $passwordHash);
            $result = $this->db->singleEntry();
    
            return $result;
    }
    
    public function createSession($sessionCreds)
    {
        $_SESSION['isLoggedIn'] = true;
        $_SESSION['userData'] = array(
            "id" => $sessionCreds['id'],
            "name" => $sessionCreds['username'],
            "email" => $sessionCreds['email'],
            "admin" => $sessionCreds['is_admin'],
        );

    }


}




?>