<?php


class Database{
   // specify your own database credentials
  
   private $host="localhost";
   private $user="root";
   private $db="user";
   private $pass="";
   private $conn;
  
   public function __construct(){
  
   $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db,$this->user,$this->pass);
   }

  
}
?>