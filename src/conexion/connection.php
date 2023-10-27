<?php

error_reporting(E_ALL);

ini_set('display_errors', 1);
class Connection{
  private static $instance;
  private $connection;

  private function __construct(){
    $this->makeConnection();
  }

  public static function getInstance(){
    if(!self::$instance instanceof self)
      self::$instance = new self();
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
    $this->validateConnection($mysqli);
    $this->setnamesConnection($mysqli);
    $this->connection = $mysqli;

  }
  private function validateConnection(mysqli $mysqli){
    if ($mysqli->connect_errno)
      die("fallo la conexion: {$mysqli->connect_error}");
  }

  private function setnamesConnection(mysqli $mysqli){
    $setnames = $mysqli->prepare("SET NAMES 'utf8'");
    $setnames->execute();
  }

}

