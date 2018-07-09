<?php
//session_start();
include('database.php');


 class User{
     protected $conn;
    public function __construct(){
    $database= new Database();
    $db=$database->db_con;
    $this->conn=$db;

    //$this->db_con=$conn;
    
                                }
    public function Login($username,$password){
       //echo $this->conn;
             
       $stmt = $this->conn->prepare("SELECT * FROM users WHERE user_id=:uname and user_city=:umail LIMIT 1");
          $stmt->execute(array(':uname'=>$username, ':umail'=>$password));
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          if($stmt->rowCount() > 0)
          {
          $_SESSION['loggedName']= $userRow['first_name'];
          return true;
          }
          else{
             // echo 'Wrong details';
              return false;
          }

    }


    public function is_loggedIn()
    {
if (isset($_SESSION['loggedName']))
    {
        return true;
    }
    }
    public function logout()
    {
unset($_SESSION['loggedName']);
   
    }



}
