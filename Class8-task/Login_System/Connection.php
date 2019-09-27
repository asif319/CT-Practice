<?php

class Connection{

    public $conn;

    public function __construct()
    {
        $pdo = new PDO("mysql:host=localhost;dbname=login", "root", "");
        $this->conn = $pdo;
    }

    public function login($user, $pass)
    {
        $pass = md5($pass);
        $getSql = "SELECT * FROM registration WHERE username='$user' AND password='$pass'";
        $getStatement = $this->conn->prepare($getSql);
        $getStatement->execute();
        $result = $getStatement->fetchAll();
        return $result;
    }
}