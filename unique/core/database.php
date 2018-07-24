<?php
//session_start();
class FrontEndDatabase{
  
  // specify your own database credentials
  private $db_host = "localhost";
  private $db_name = "dbtuts";
  private $db_user = "root";
  private $db_pass = "";
  public $db_cons;

  public function __construct(){
   
    try{
        $this->db_cons = new PDO("mysql:host=" . $this->db_host . ";dbname=" . $this->db_name, $this->db_user, $this->db_pass);
    }catch(PDOException $exception){
        echo "db_conection error: " . $exception->getMessage();
    }
    // echo 'Connect goodss';
    return $this->db_cons;


  }


}