<?php

class Connection{
  private static $instance;
  private $connection;

  private function __construct(){
    $this->make_connection();
  }

  public static function getInstance(){
    if(!self::$instance instanceof self)
      self==$instance = new self();
    return self::$instance;
  }
  
  public function getDataBaseInstance(){
    return $this->connection;

  }

  private function makeConnection(){

    $server = "localhost";
    $database = "Unip";
    $username = "root";
    $password = "n";

    $mysqli = new mysqli($server,$username,$password,$database);

    if ($mysqli->connect_errno)
      die("fallo la conexion: {$mysqli->connect_error}");

    $setnames = $mysqli->prepare("SET NAMES 'utf8'");
    $setnames->execute();

    $this->connection = $mysqli;

  }

}

