<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
	</title>

	  <link rel="stylesheet" type="text/css" href="style.css">
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  	
  	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   <style type="text/css">
      .container-fluid{
          background-color: white;
      }

      .container-fluid a{
        color: black;
        font-family: Lato;
      }
   </style>
</head>
<body>

	    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand active" style="color: #1473e6"><b>Library Manangement System</b></a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="index.php" style="color: black"><b>Home</b></a></li>
            <li><a href="books.php" style="color: black"><b>Books</b></a></li>
            <li><a href="feedback.php" style="color: black"><b>Forum</b></a></li>
          </ul>
          <?php
            if(isset($_SESSION['login_user']))
            {?>
                <ul class="nav navbar-nav">
                  
                  <li><a href="profile.php">PROFILE</a></li>
                
                  <li><a href="student.php">
                    STUDENT-INFORMATION
                  </a></li>
                  <li><a href="fine.php">FINES</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                  <li><a href="profile.php">
                    <div style="color: white">

                      <?php
                        echo "<img class='img-circle profile_img' height=30 width=30 src='images/".$_SESSION['pic']."'>";

                        echo " ".$_SESSION['login_user']; 
                      ?>
                    </div>
                  </a></li>
                  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
                  
                </ul>
              <?php
            }
            else
            {   ?>
              <ul class="nav navbar-nav navbar-right">

                <li><a href="admin_login.php" style="color: #1473e6"><span class="glyphicon glyphicon-log-in"> <b style="font-family: Lato">Login</b></span></a></li>
                
                <li><a href="registration.php" style="color: #1473e6"><span class="glyphicon glyphicon-user"> <b style="font-family: Lato">Sign up</b></span></a></li>
              </ul>
                <?php
            }

          ?>

      </div>
    </nav>



</body>
</html>