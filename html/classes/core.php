<?php
//session_start();
include('database.php');

//page tracker

class PageTracker{

    //active navigation
    // name of nav id $NavName
    function NavTracker($NavName){
        echo'
        <script>
            var element = document.getElementById("'.$NavName.'");
            element.classList.add("active");
        </script>'; // Display javascript to active the active property

    }//end nav  tracker
}//end page tracker




 class User{
    protected $conn;
    public function __construct(){
    $database= new Database();
    $db=$database->db_con;
    $this->conn=$db;
    //$this->db_con=$conn;
         }

    public function activityLog($logid, $logactivity,$loguser, $logtimestamp) //log all actiivities
            {
                    //perform activity storage
                $stmt_log = $this->conn->prepare("INSERT INTO activity_log (log_id, log_activity, log_user, log_timestamp) 
                VALUES (:logid, :logactivity, :loguser, :logtimestamp)");
                    //bind paramaeters
                 $stmt_log->bindParam(':logid', $logid);
                $stmt_log->bindParam(':logactivity', $logactivity);
                $stmt_log->bindParam(':logactivity', $loguser);
                $stmt_log->bindParam(':logtimestamp', $logtimestamp);
                    // carryout activity storage
                $stmt_log->execute();
                    // sucessfull
                 return true;
            }


    public function Login($username,$password){  //user login
       //echo $this->conn;
            $activity_type='Logged In';
            $logtimestamp=Date('d-m-Y H:i:s');
            $logid='';

          $stmt = $this->conn->prepare("SELECT * FROM users WHERE user_email=:uname and user_password=:upass LIMIT 1");
          $stmt->execute(array(':uname'=>$username, ':upass'=>$password));
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
            if($stmt->rowCount() > 0)
                 {
                     $_SESSION['loggedName']= $userRow['token'];

                            // call activity_log to log action
                        $this->activityLog($logid, $activity_type, $logtimestamp);
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
