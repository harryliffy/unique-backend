<?php  
//session_start();
include_once('classes/core.php');
$User= new User();

?>

<nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li class=""><a href="#">Page 3</a></li>
    </ul>
    <?php 
    $log=$User->is_loggedIn();
    if ($log){
      echo'
     
      <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">User <span class="caret"></span></a>
      <ul class="dropdown-menu float-right">
        <li><a href="profile.php">profile</a></li>
        <li><a href="#">settings</a></li>
        <li><a href="#">help</a></li>
      </ul>
    </li>
      <li><a href="function/logout.php"><span class="glyphicon glyphicon-user"></span>Logout </a></li>
      </ul>';
    }
    else {
      echo'
      <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>';
    }
    ?>
  
  </div>
    </div>
    
    </nav>

<?php 


?>