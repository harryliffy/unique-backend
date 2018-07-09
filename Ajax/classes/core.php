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
    public function Login($username,$password){  //user login
       //echo $this->conn;
             
       $stmt = $this->conn->prepare("SELECT * FROM users WHERE user_email=:uname and user_password=:upass LIMIT 1");
          $stmt->execute(array(':uname'=>$username, ':upass'=>$password));
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          if($stmt->rowCount() > 0)
          {
          $_SESSION['loggedName']= $userRow['token'];
          return true;
          }
          else{
             // echo 'Wrong details';
              return false;
          }

    }


    public function is_loggedIn()  // check logged in status
        {
        if (isset($_SESSION['loggedName']))
         {
             return true;
            }
     }  // end of is logged in

    public function logout()  //log out user
    {
        unset($_SESSION['loggedName']);
      } //end of logout


      public function Register($fullname, $useremail, $userpassword,$user_role)
        {
           $user_id='';  //left empty because of column auto increament
           // $full_name;
          //  $user_email;
          //  $user_password;
          //  $user_role;
           $token = bin2hex(random_bytes(64));
            $join_date=Date('d-m-Y H:i:s');
            $modified_date='0';
              // prepare sql and bind parameters
    $stmt = $this->conn->prepare("INSERT INTO users (user_id, full_name, user_email,user_password,user_role,token,join_date,modified_date) 
    VALUES (:userid, :fullname, :useremail, :userpassword, :userrole, :token, :joindate, :modifieddate)");
     $stmt->bindParam(':userid', $user_id);
    $stmt->bindParam(':fullname', $fullname);
    $stmt->bindParam(':useremail', $useremail); 
    $stmt->bindParam(':userpassword', $userpassword);
    $stmt->bindParam(':userrole', $user_role);
    $stmt->bindParam(':token', $token);        
     $stmt->bindParam(':joindate', $join_date);
    $stmt->bindParam(':modifieddate', $modified_date);
    $stmt->execute();
    return true;
   
   }   // end of register

public function resetPassword($resetUsername)
    {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE user_email=:uname LIMIT 1");
        $stmt->execute(array(':uname'=>$resetUsername));
        $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
        if($stmt->rowCount() > 0)
        {
        //$_SESSION['loggedName']= $userRow['token'];
        return true;
        }
        else{
           echo 'Wrong details';
            return false;
        }

    }


}
