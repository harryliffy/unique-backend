<?php
session_start();
include_once("header.php");
try{
				
				$vendor_id=$_SESSION['vendor_session'];
	
		
			}
			
			catch(PDOException $e){
			echo $e->getMessage();
		}
?>
<?php
 //error_reporting( ~E_NOTICE );
 require_once 'dbconfig.php';
 /*
 if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
 {
  $id = $_GET['edit_id'];
  $stmt_edit = $DB_con->prepare('SELECT userName, userProfession, userPic FROM tbl_users WHERE userID =:uid');
  $stmt_edit->execute(array(':uid'=>$id));
  $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
  extract($edit_row);
 }
 else
 {
  header("Location: index.php");
 }
 */
 if(isset($_POST['btn_save']))
 {
  $username = $_POST['user_name'];// user name
  $userjob = $_POST['user_job'];// user email
   
  $imgFile = $_FILES['user_image']['name'];
  $tmp_dir = $_FILES['user_image']['tmp_name'];
  $imgSize = $_FILES['user_image']['size'];
     
  if($imgFile)
  {
	  
	 
	
	 $dfe='data/'.$vendor_id.'/'; 
   $upload_dir = $dfe; // upload directory 
   $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
   $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
  // $userpic = rand(1000,1000000).".".$imgExt;
   
   $userpic='prof'.".".$imgExt;
   if(in_array($imgExt, $valid_extensions))
   {   
    if($imgSize < 5000000)
    {
     unlink($upload_dir.$edit_row['userPic']);
     move_uploaded_file($tmp_dir,$upload_dir.$userpic);
	 try{
	
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbregistration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE vendor SET profilepix='$userpic' WHERE vendor_id='$vendor_id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
	
		 
	 } 
	  catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }	 
		
	echo' <script>
    alert("Successfully Updated ...");
    window.location.href="home";
    </script>';

		
    }
    else
    {
     $errMSG = "Sorry, your file is too large it should be less then 5MB";
    }
   }
   else
   {
    $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";  
   } 
  }
  else
  {
   // if no image selected the old image remain as it is.
  // $userpic = $edit_row['userPic']; // old image from database
  } 
      
   /*
  // if no error occured, continue ....
  if(!isset($errMSG))
{
   $stmt = $DB_con->prepare('UPDATE tbl_users 
              SET userName=:uname, 
               userProfession=:ujob, 
               userPic=:upic 
               WHERE userID=:uid');
   $stmt->bindParam(':uname',$username);
   $stmt->bindParam(':ujob',$userjob);
   $stmt->bindParam(':upic',$userpic);
   $stmt->bindParam(':uid',$id);
    
   if($stmt->execute()){
    ?>
                <script>
    alert('Successfully Updated ...');
    window.location.href='index.php';
    </script>
                <?php
   }
   else{
    $errMSG = "Sorry Data Could Not Updated !";
   }*/
  }    
 
?>


<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
			
			<?php
			
			try{
				
				$vendor_id=$_SESSION['vendor_session'];
				
			$stmt = $db_con->prepare("SELECT * FROM vendor WHERE vendor_id=:vendor_id");
			$stmt->execute(array(":vendor_id"=>$vendor_id));
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			$count = $stmt->rowCount();
			echo $row['vendor_name'];
		$ty= $row['profilepix'];
			}
			
			catch(PDOException $e){
			echo $e->getMessage();
		}
	
			
			?>
			
			DASHBOARD</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
        <div class="row clearfix top-report">
            <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                <div class="card">
                    <div class="panel-body">
                        <h3>50.5 Gb</h3>
                        <p class="text-muted">Traffic this month</p>
                        <div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <span class="text-small">4% higher than last month</span> </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                <div class="card">
                    <div class="panel-body">
                        <h3>26.8%</h3>
                        <p class="text-muted">Server Load</p>
                        <div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope" >
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <span class="text-small">4% higher than last month</span> </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                <div class="card">
                    <div class="panel-body">
                        <h3 >$ 14,500</h3>
                        <p class="text-muted">Total Sale</p>
                        <div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope" >
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <span class="text-small">15% higher than last month</span> </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                <div class="card">
                    <div class="panel-body">
                        <h3>1,600</h3>
                        <p class="text-muted">Total Feedbacks</p>
                        <div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <span class="text-small">10% higher than last month</span> </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card cpu-usage">
                    <div class="header">
                        <h2>Profile Information</h2>
                        <div class="pull-right">
                            <div class="switch panel-switch-btn"> <span class="m-r-10 font-12">Profile Picture</span>
                                <label>OFF
                                    <input type="checkbox" id="realtime" checked>
                                    <span class="lever switch-col-cyan"></span>ON</label>
                            </div>
                        </div>
                    </div>
                    <div class="body">
					<?php
					$tr='data/'.$vendor_id.'/'.$ty;
					
					?>
					<img src="<?php echo $tr;?>" />
                        <!--<div id="real_time_chart" class="dashboard-flot-chart"></div>-->
                    </div>
                </div>
            </div>
        </div>
		
		 <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>  <small>FILE UPLOAD - DRAG & DROP OR WITH CLICK & CHOOSE <a href="http://www.dropzonejs.com/" target="_blank">www.dropzonejs.com</a></small> </h2>
                
                    </div>
                    <div class="body">
                        <form action="http://thememakker.com/" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                            <div style="text-align: -webkit-center;" class="dz-message">
                                <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                <h3>Drop files here or click to upload.</h3>
                                <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em> </div>
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# File Upload | Drag & Drop OR With Click & Choose --> 
		
		<form method="post" enctype="multipart/form-data" class="form-horizontal">
     
 <table class="table table-bordered table-responsive">
 
    <tr>
     <td><label class="control-label">Username.</label></td>
        <td><input class="form-control" type="text" name="user_name" placeholder="Enter Username" value="<?php echo $username; ?>" /></td>
    </tr>
    
    <tr>
     <td><label class="control-label">Profession(Job).</label></td>
        <td><input class="form-control" type="text" name="user_job" placeholder="Your Profession" value="<?php echo $userjob; ?>" /></td>
    </tr>
    
    <tr>
     <td><label class="control-label">Profile Img.</label></td>
        <td><input class="input-group" type="file" name="user_image" accept="image/*" /></td>
    </tr>
    
    <tr>
        <td colspan="2"><button type="submit" name="btn_save" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> &nbsp; save
        </button>
        </td>
    </tr>
    
    </table>
    
</form>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
        <div class="row clearfix">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-2 bg-blue hover-zoom-effect">
                    <div class="icon"><i class="zmdi zmdi-badge-check"></i></div>
                    <div class="content">
                        <div class="text">TASKS</div>
                        <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-2 bg-blue-grey hover-expand-effect">
                    <div class="icon"> <i class="zmdi zmdi-help-outline"></i></div>
                    <div class="content">
                        <div class="text">TICKETS</div>
                        <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-2 bg-green hover-expand-effect">
                    <div class="icon"><i class="zmdi zmdi-comments"></i></div>
                    <div class="content">
                        <div class="text">COMMENTS</div>
                        <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-2 bg-orange hover-zoom-effect">
                    <div class="icon"><i class="zmdi zmdi-account-add"></i></div>
                    <div class="content">
                        <div class="text">VISITORS</div>
                        <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix"> 
            <!-- Task Info -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>TASK INFOS</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover dashboard-task-infos">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Task</th>
                                        <th>Status</th>
                                        <th>Manager</th>
                                        <th>Progress</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Task A</td>
                                        <td><span class="label bg-green">Doing</span></td>
                                        <td>John Doe</td>
                                        <td><div class="progress">
                                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%"></div>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Task B</td>
                                        <td><span class="label bg-blue">To Do</span></td>
                                        <td>John Doe</td>
                                        <td><div class="progress">
                                                <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Task C</td>
                                        <td><span class="label bg-light-blue">On Hold</span></td>
                                        <td>John Doe</td>
                                        <td><div class="progress">
                                                <div class="progress-bar bg-light-blue" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%"></div>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Task D</td>
                                        <td><span class="label bg-orange">Wait Approvel</span></td>
                                        <td>John Doe</td>
                                        <td><div class="progress">
                                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Task E</td>
                                        <td><span class="label bg-red">Suspended</span></td>
                                        <td>John Doe</td>
                                        <td><div class="progress">
                                                <div class="progress-bar bg-red" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%"></div>
                                            </div></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Task Info --> 
        </div>
		
		
		
		 <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card cpu-usage">
                    <div class="header">
                        <h2>CPU USAGE (%)</h2>
                        <div class="pull-right">
                            <div class="switch panel-switch-btn"> <span class="m-r-10 font-12">REAL TIME</span>
                                <label>OFF
                                    <input type="checkbox" id="realtime" checked>
                                    <span class="lever switch-col-cyan"></span>ON</label>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <div id="real_time_chart" class="dashboard-flot-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix"> 
            <!-- Visitors -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card current_progress">
                    <div class="header">
                        <h2>Current Progress</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row user-progress user-progress-small">
                            <div class="col-md-5"><span class="title">Bootstrap Admin</span></div>
                            <div class="col-md-7">
                                <div class="progress">
                                    <div style="width: 40%" class="progress-bar progress-bar-success"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row user-progress user-progress-small">
                            <div class="col-md-5"><span class="title">Custom Work</span></div>
                            <div class="col-md-7">
                                <div class="progress">
                                    <div style="width: 65%" class="progress-bar progress-bar-success"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row user-progress user-progress-small">
                            <div class="col-md-5"><span class="title">Clients Module</span></div>
                            <div class="col-md-7">
                                <div class="progress">
                                    <div style="width: 30%" class="progress-bar progress-bar-success"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row user-progress user-progress-small">
                            <div class="col-md-5"><span class="title">Email Templates</span></div>
                            <div class="col-md-7">
                                <div class="progress">
                                    <div style="width: 80%" class="progress-bar progress-bar-success"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row user-progress user-progress-small">
                            <div class="col-md-5"><span class="title">Plans Module</span></div>
                            <div class="col-md-7">
                                <div class="progress">
                                    <div style="width: 45%" class="progress-bar progress-bar-success"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Visitors --> 
            <!-- Visitors -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card activities">
                    <div class="header">
                        <h2>Activities</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="streamline b-l b-accent">
                            <div class="sl-item">
                                <div class="sl-content">
                                    <div class="text-muted-dk">Just now</div>
                                    <p>Finished task <a href="#" class="text-info">#features 4</a>.</p>
                                </div>
                            </div>
                            <div class="sl-item b-info">
                                <div class="sl-content">
                                    <div class="text-muted-dk">11:30</div>
                                    <p><a href="#">@Jessi</a> retwit your post</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary b-l">
                                <div class="sl-content">
                                    <div class="text-muted-dk">10:30</div>
                                    <p>Call to customer <a href="#" class="text-info">Jacob</a> and discuss the detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-warning">
                                <div class="sl-content">
                                    <div class="text-muted-dk">3 days ago</div>
                                    <p><a href="#" class="text-info">Jessi</a> commented your post.</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary b-l">
                                <div class="sl-content">
                                    <div class="text-muted-dk">10:30</div>
                                    <p>Call to customer <a href="#" class="text-info">Jacob</a> and discuss the detail.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Visitors --> 
            <!-- Browser Usage -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>BROWSER USAGE</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div id="donut_chart" class="dashboard-donut-chart"></div>
                    </div>
                </div>
            </div>
            <!-- #END# Browser Usage --> 
        </div>
        <div class="row clearfix"> 
            <!-- Purchases -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="card activities">
                    <div class="header">
                        <h2>Purchases</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-striped table-borderless">
                            <thead>
                                <tr>
                                    <th style="width:40%;">Product</th>
                                    <th class="number">Price</th>
                                    <th style="width:20%;">Date</th>
                                    <th style="width:20%;">State</th>
                                    <th style="width:5%;" class="actions"></th>
                                </tr>
                            </thead>
                            <tbody class="no-border-x">
                                <tr>
                                    <td>Sony Xperia M4</td>
                                    <td class="number">$149</td>
                                    <td>Aug 23, 2016</td>
                                    <td class="text-success">Completed</td>
                                    <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Apple iPhone 6</td>
                                    <td class="number">$535</td>
                                    <td>Aug 20, 2016</td>
                                    <td class="text-success">Completed</td>
                                    <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Samsung Galaxy S7</td>
                                    <td class="number">$583</td>
                                    <td>Aug 18, 2016</td>
                                    <td class="text-warning">Pending</td>
                                    <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>HTC One M9</td>
                                    <td class="number">$350</td>
                                    <td>Aug 15, 2016</td>
                                    <td class="text-warning">Pending</td>
                                    <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Sony Xperia Z5</td>
                                    <td class="number">$495</td>
                                    <td>Aug 13, 2016</td>
                                    <td class="text-danger">Cancelled</td>
                                    <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- #END# Purchases --> 
        </div>
    </div>
</section>
<div class="color-bg"></div>


<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/plugins/bootstrap-notify/bootstrap-notify.js"></script> <!-- Bootstrap Notify Plugin Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/morphing.js"></script>
<script src="assets/js/pages/ui/modals.js"></script> 


<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script> <!-- Bootstrap Colorpicker Js --> 
<script src="assets/plugins/dropzone/dropzone.js"></script> <!-- Dropzone Plugin Js --> 
<script src="assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script> <!-- Input Mask Plugin Js --> 
<script src="assets/plugins/multi-select/js/jquery.multi-select.js"></script> <!-- Multi Select Plugin Js --> 
<script src="assets/plugins/jquery-spinner/js/jquery.spinner.js"></script> <!-- Jquery Spinner Plugin Js --> 
<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script> <!-- Bootstrap Tags Input Plugin Js --> 
<script src="assets/plugins/nouislider/nouislider.js"></script> <!-- noUISlider Plugin Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/morphing.js"></script> 
<script src="assets/js/pages/forms/advanced-form-elements.js"></script> 


<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/plugins/jquery-countto/jquery.countTo.js"></script> <!-- Jquery CountTo Plugin Js --> 
<script src="assets/bundles/flotscripts.bundle.js"></script><!-- Flot Charts Plugin Js --> 
<script src="assets/bundles/morrisscripts.bundle.js"></script><!-- Morris Plugin Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/morphing.js"></script> 
<script src="assets/js/pages/index.js"></script>
</body>

<!-- Mirrored from thememakker.com/swift/admin/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Jun 2017 16:39:20 GMT -->
</html>