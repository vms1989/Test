<?php

class Dbh {

  private $server;
  private $username;
  private $password;
  private $db;

  protected function connect() {
    $this->server = "localhost:3306";
    $this->username = "root";
    $this->password = "";
    $this->db = "lahjakone";

    try {
      $handler = new PDO("mysql:host=$this->server;dbname=$this->db", "$this->username", "$this->password");
      $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
      echo $e->getMessage();
      die();
    }
    return $handler;
  }
}
