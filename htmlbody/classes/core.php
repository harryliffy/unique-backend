    <?php
    //session_start();
    include('database.php');


            /*
            1. Page navigation tracker Class
                active page
            2   User
                    user activity log storage
                    log access



            */

    //page tracker

    class PageTracker{
            
        //active navigation
                function NavTracker($NavName){ // active page tracker
            echo'
            <script>
                var element = document.getElementById("'.$NavName.'");
                element.classList.add("active");
            </script>'; // Display javascript to active the active property

        }//end nav  tracker
    }//end page tracker


    class User{


        protected $now;
        protected $conn;
        public function __construct(){
        $database= new Database();
        $db=$database->db_con;
        $this->conn=$db;

        


        //$this->db_con=$conn;
            }
            public function timeAgo($diff){
                /* function to return the highrst defference fount */
                if(!is_object($diff)){
                    return;
                }
            
                if($diff->y > 0){
                    return $diff->y .(" year".($diff->y > 1?"s":"")." ago");
                }
            
                if($diff->m > 0){
                    return $diff->m .(" month".($diff->m > 1?"s":"")." ago");
                }
            
                if($diff->d > 0){
                    return $diff->d .(" day".($diff->d > 1?"s":"")." ago");
                }
            
                if($diff->h > 0){
                    return $diff->h .(" hour".($diff->h > 1?"s":"")." ago");
                }
            
                if($diff->i > 0){
                    return $diff->i .(" minute".($diff->i > 1?"s":"")." ago");
                }
            
                if($diff->s > 0){
                    return $diff->s .(" second".($diff->s > 1?"s":"")." ago");
                }
            }

        public function activityLog($logid, $logactivity,$loguser, $logtimestamp) //log all actiivities
                {
                        //perform activity storage
                    $stmt_log = $this->conn->prepare("INSERT INTO activity_log (log_id, log_activity, log_user, log_timestamp) 
                    VALUES (:logid, :logactivity, :loguser, :logtimestamp)");
                        //bind paramaeters
                    $stmt_log->bindParam(':logid', $logid);
                    $stmt_log->bindParam(':logactivity', $logactivity);
                    $stmt_log->bindParam(':loguser', $loguser);
                    $stmt_log->bindParam(':logtimestamp', $logtimestamp);
                        // carryout activity storage
                    $stmt_log->execute();
                        // sucessfull
                    return true;
                }
            
        public function accessLog()    // read log if requested byadmin
                    {
                        $stmt_log_access = $this->conn->prepare("SELECT * FROM activity_log ORDER BY log_timestamp DESC LIMIT 10");
                        $stmt_log_access->execute();

                        // set the resulting array to associative
                        while($result = $stmt_log_access->fetch(PDO::FETCH_ASSOC))
                            {
                                //initilise the input variables
                        $readLogId=$result['log_id'];
                        $readLogActivity=$result['log_activity'];
                        $readLogUser=$result['log_user'];
                        $readLogTime=$result['log_timestamp'];
                            // get time ago of time
                            $nows=Date('d-m-Y H:i:s');
                            $datetime1 = new DateTime($nows);
                            $datetime2 = new DateTime($readLogTime);
                            $difference = $datetime1->diff($datetime2);
                            $stmt1 = $this->conn->prepare("SELECT * FROM users WHERE  user_id=:uid LIMIT 1");
                            $stmt1->execute(array( ':uid'=>$readLogUser));
                            $userRow1=$stmt1->fetch(PDO::FETCH_ASSOC);
                            if($stmt1->rowCount() > 0)
                                        {
                                            
                                        
                            

echo'
                                                <a href="#" class="list-group-item">
                                                <div class="list-group-status status-online"></div>
                                                <img src="assets/images/users/no-image.jpg" class="pull-left" alt="John Doe"/>
                                                <span class="contacts-title">'.$userRow1['full_name'].'&nbsp'. $this->timeAgo($difference).'</span>
                                                <p>'.$readLogActivity.' to account</p>
                                            </a>';




                                            }

                    // echo '<br>';
                            }
                    }

        public function currentUserProfile()
                    {
                     
                        $stmt = $this->conn->prepare("SELECT * FROM users WHERE user_email=:uname and user_password=:upass LIMIT 1");
                        $stmt->execute(array(':uname'=>$username, ':upass'=>$password));
                        $userRow=$stmt->fetch(PDO::FETCH_ASSOC);


                    }


        public function Login($username,$password){  //user login
        //echo $this->conn;
                $activity_type='logged in';
                $logtimestamp=Date('d-m-Y H:i:s');
                $logid='';

            $stmt = $this->conn->prepare("SELECT * FROM users WHERE user_email=:uname and user_password=:upass LIMIT 1");
            $stmt->execute(array(':uname'=>$username, ':upass'=>$password));
            $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
                if($stmt->rowCount() > 0)
                    {
                        $_SESSION['loggedName']= $userRow['token'];
                        $_SESSION['loggedFullname']= $userRow['full_name'];
                        $_SESSION['userStatus']= $userRow['user_role'];
                       
                        $loguser=$userRow['user_id'];
                                // call activity_log to log action
                            $this->activityLog($logid, $activity_type, $loguser, $logtimestamp);
                            return true;
                    }
                else{
                                // echo 'Wrong details';
                                    return false;
                    }

        }


        public function is_loggedIn()  // check logged in status
            {
            if ((isset($_SESSION['loggedName'])) and (isset( $_SESSION['loggedFullname']))) 
            {
                return true;
                }
        }  // end of is logged in

        public function guest(){
           
        }
        
        public function logout()  //log out user
        {
            unset($_SESSION['loggedName']);
            unset ($_SESSION['loggedFullname']);
            
            unset ($_SESSION['userStatus']);
            if(session_destroy())
        {
            header("Location: ../login");
        }
        } //end of logout


                public function Register($fullname, $useremail, $userpassword,$user_role)  // register new admin
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

                        //logged current user in
                        $_SESSION['loggedName']= $token;
                        $_SESSION['loggedFullname']= $fullname;

                        return true;
                    
            }   // end of register

     public function addEvent($eventname, $eventlocation, $eventdate,$eventdescription, $eventimage)  // add upcomming events
                {
            $event_id='';  //left empty because of column auto 
            // prepare sql and bind parameters
            $stmta = $this->conn->prepare("INSERT INTO sch_events(event_id, event_name, event_location, event_date, event_description,event_image) 
            VALUES (:eventid, :eventname, :eventlocation, :eventdate, :eventdescription, :eventimage)");
            $stmta->bindParam(':eventid', $event_id);
            $stmta->bindParam(':eventname', $eventname);
            $stmta->bindParam(':eventlocation', $eventlocation); 
            $stmta->bindParam(':eventdate', $eventdate);
            $stmta->bindParam(':eventdescription', $eventdescription);
            $stmta->bindParam(':eventimage', $eventimage);
            $stmta->execute();

            //store event
            echo 'ok';    
            return true;

         }   // end of upcomming events





    public function dataview($query)  //paginatin dv
    {
        
        $stmt = $this->conn->prepare($query);
        //$stmt = $this->db->prepare("SELECT * FROM sch_event");
          $stmt->execute();

        if($stmt->rowCount()>0)
        {
            $galleryPath="galleryUploads/";
               while($row=$stmt->fetch(PDO::FETCH_ASSOC))
               {
              /*    echo'
                  <tr>
                  <td>'. $row['imageDescription'].' </td>
                  <td> '.$row['imageCategory'].'</td>
                  <td><img width ="300" src="'.$galleryPath.''. $row['imageFile'].'" /></td>
                  </tr>'; */
// fetch gallery
                 echo' <a class="gallery-item" href="'.$galleryPath.''. $row['imageFile'].'" title="'. $row['imageDescription'].'" data-gallery>
                  <div class="image">
                      <img src="'.$galleryPath.''. $row['imageFile'].'" alt="'. $row['imageDescription'].'"/>    
                      <ul class="gallery-item-controls">
                          <li><label class="check"><input onclick="location.href="edit-image;" " name="editbox" id="editbox" type="checkbox" value="" class="icheckbox"/></label></li-->
                          <input type="hidden" name="edit" id="edit" value="'.$row['imageId'].'" />
                          <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                          <li onclick="location.href=\'edit-image?id='.base64_encode($row['imageId']).'  \';" ><span class="gallery-item-edit "><i class="fa fa-pencil"></i></span></li>
                      </ul>                                                                    
                  </div>
                  <div class="meta">
                      <strong>'. $row['imageDescription'].'  </strong>
                      <span>'.$row['imageCategory'].'</span>
                     
                  </div>                                
              </a>';

               }
        }
        else
        {
               echo'
               <tr>
               <td>Nothing here...</td>
               </tr>
               ';
        }
 
}

public function paging($query,$records_per_page)
{
       $starting_position=0;
       if(isset($_GET["page_no"]))
       {
            $starting_position=($_GET["page_no"]-1)*$records_per_page;
       }
       $query2=$query." limit $starting_position,$records_per_page";
       return $query2;
}

public function paginglink($query,$records_per_page)
{
 
       $self = $_SERVER['PHP_SELF'];
 
       $stmt = $this->conn->prepare($query);
       $stmt->execute();
 
       $total_no_of_records = $stmt->rowCount();
 
       if($total_no_of_records > 0)
       {
        echo' <ul class="pagination pagination-sm push-up-20">';
           $total_no_of_pages=ceil($total_no_of_records/$records_per_page);
           $current_page=1;
           if(isset($_GET["page_no"]))
           {
              $current_page=$_GET["page_no"];
           }
           if($current_page!=1)
           {
              $previous =$current_page-1;
             
              echo "<li><a href='".$self."?page_no=1'>First</a></li>&nbsp;&nbsp;";
              echo "<li><a href='".$self."?page_no=".$previous."'>Previous</a></li>&nbsp;&nbsp;";
              
           }
           for($i=1;$i<=$total_no_of_pages;$i++)
           {
           if($i==$current_page)
           {
               echo "<li class='active'><a href='".$self."?page_no=".$i."' style='color:red;text-decoration:none'>".$i."</a></li>&nbsp;&nbsp;";
           }
           else
           {
               echo "<li><a href='".$self."?page_no=".$i."'>".$i."</a></li>&nbsp;&nbsp;";
           }
  }
  if($current_page!=$total_no_of_pages)
  {
       $next=$current_page+1;
       echo "<li><a href='".$self."?page_no=".$next."'>Next</a></li>&nbsp;&nbsp;";
       echo "<li><a href='".$self."?page_no=".$total_no_of_pages."'>Last</a></li>&nbsp;&nbsp;";
  }
  echo'</ul>';
 }
}




    /* ********************BEGIN EVENTS ************************************88 */


public function viewEvent() // display events table
        {
            $stmtevent = $this->conn->prepare("SELECT * FROM sch_events");
            $stmtevent->execute();
            while($eventRow=$stmtevent->fetch(PDO::FETCH_ASSOC))
                {
                  

              echo'  <tr>
                <td><label class="check"><input type="checkbox" class="icheckbox" /></label></td>
                <td><img width="35" src="uploads/'.$eventRow['event_image'].'"></td>
                <td>'.$eventRow['event_name'].'</td>
                <td>'.$eventRow['event_location'].'</td>
                <td>'.$eventRow['event_date'].'</td>
               
                <td>'.$eventRow['event_description'].'</td>
                <td><a href="edit-event?id='.base64_encode($eventRow['event_id'] ).'"><span class="fa fa-pencil"></span></a></td>
                <!--td><a class="delete_product" data-id="" id="deleteevent" name="deleteevent" ><span class="fa fa-close"></span></a></td-->
                <td>
                <a class="delete_product" data-id="'.$eventRow['event_id'].'" href="javascript:void(0)">
                <i class="glyphicon glyphicon-trash"></i>
                </a></td>
            </tr>';

                }


        }
       

public function fetchEvent($editEventId){   ///fetch events to be editted   edit-event.php
    $stmtfetch = $this->conn->prepare("SELECT * FROM sch_events  WHERE event_id=:eventid LIMIT 1");
    $stmtfetch->execute(array(':eventid'=>$editEventId));
        $fetchRow=$stmtfetch->fetch(PDO::FETCH_ASSOC);
          return $fetchRow;

}


public function fetchEditEvent($quet,$a,$b, $c){   /// commit events edit to database
 /*   $ert=$this->fetchEvent();
    extract($ert);
    $rt=$this->quet;
    echo $ert['$rt'];*/
    $stmt = $this->conn->prepare('UPDATE sch_events 
									     SET event_name=:uname, 
										     event_location=:ujob, 
										     event_image=:upic 
								       WHERE event_id=:uid');
			$stmt->bindParam(':uname',$c);
			$stmt->bindParam(':ujob',$b);
			$stmt->bindParam(':upic',$a);
			$stmt->bindParam(':uid',$quet);
				
			if($stmt->execute()){  // if commit sucessful
                return true; 
				
               //echo' <script>				alert("Successfully Updated ...");
				//window.location.href="index.php";				</script>';
                
			}
			else{
				echo "Sorry Data Could Not Updated !";
			}

}

public function deleteEvent($deleteId){

 

    $stmt_select = $this->conn->prepare('SELECT * FROM sch_events WHERE event_id =:uid');
    $stmt_select->execute(array(':uid'=>$deleteId));
    $imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
    unlink("uploads/".$imgRow['event_image']);
    
    // it will delete an actual record from db
    $stmt_delete = $this->conn->prepare('DELETE FROM sch_events WHERE event_id =:uid');
    $stmt_delete->bindParam(':uid',$deleteId);
    $stmt_delete->execute();
    return true;

}

/* *****************end of events ************************************** */

    public function resetPassword($resetUsername)  // check if user email to be reset exist  // password reset
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
    /* *************************************   GALLERY CORE FUNCTIONS   *************************** */

    public function addImage($imagedesc, $imagefile, $imageCategory, $by)  //add gallery image
        {
                 $imageid="";
                           
                 $datecreated= Date('d-m-Y H:i:s');
                 $datemodified="";
            $stmta = $this->conn->prepare("INSERT INTO gallery(imageId, imageDescription, imageFile, imageCategory, imageBy,dateCreated, datemodified) 
            VALUES (:imageId, :imagedesc, :imagefile, :imagecat, :imageby, :datecreated, :datemodified)");
            $stmta->bindParam(':imageId', $imageid);
            $stmta->bindParam(':imagedesc', $imagedesc);
            $stmta->bindParam(':imagefile', $imagefile); 
            $stmta->bindParam(':imagecat', $imageCategory);
            $stmta->bindParam(':imageby', $by);
            $stmta->bindParam(':datecreated', $datecreated);
            $stmta->bindParam(':datemodified', $datemodified);
            
            if 
            ($stmta->execute())
                {
           //store event
            echo 'ok';    
            return true;
                }

      

        }

        public function fetchImage($editImageId)
        
            {   ///fetch image to be editted   edit-event.php
            $stmtfetch = $this->conn->prepare("SELECT * FROM gallery  WHERE imageId=:imageid LIMIT 1");
            $stmtfetch->execute(array(':imageid'=>$editImageId));
                $fetchRow=$stmtfetch->fetch(PDO::FETCH_ASSOC);
                  return $fetchRow;
        
        }

        
public function fetchEditImage($imageEditId,$imgdesc ,$imgFile, $imgcat ){   // commit events edit to database
    $imgmod="";
       $stmt = $this->conn->prepare('UPDATE gallery 
                                            SET imageDescription=:imagename, 
                                            imageFile=:imagefile, 
                                            imageCategory=:imagecategory, 
                                            datemodified=:datemodified
                                          WHERE imageId=:imageuid');
               $stmt->bindParam(':imagename',$imgdesc);
               $stmt->bindParam(':imagefile',$imgFile);
               $stmt->bindParam(':imagecategory',$imgcat);
               $stmt->bindParam(':datemodified',$imgmod);
               $stmt->bindParam(':imageuid',$imageEditId);
                   
               if($stmt->execute()){  // if commit sucessful
                   return true; 

                  //echo' <script>				alert("Successfully Updated ...");
                   //window.location.href="index.php";				</script>';
                   
               }
               else{
                   echo "Sorry Data Could Not Updated !";
               }
   
   }

        /* *************************** GALLERY  END******************* */

    }  //end user class
