<?php session_start();
 include('dbcon.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <!-- Visit codeastro.com for more projects -->
<head>
        <title>Gym System Admin</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/matrix-style.css" />
        <link rel="stylesheet" href="css/matrix-login.css" />
        <link href="font-awesome/css/fontawesome.css" rel="stylesheet" />
        <link href="font-awesome/css/all.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/style.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
    
        <div id="loginbox">  
                      
            <form id="loginform" method="POST" class="form-vertical" action="#">
            <!--<div class="control-group normal_text"> <h3>Admin Login</h3> -->
            <!--<h1 class="text-center">Fitness Club <i background="black"></i></h1> -->
            <div class="control-group normal_text"> <h3><img src="img/nlogo.png" alt="Logo" /></h3></div> 
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="fas fa-user-circle"></i></span><input type="text" name="user" placeholder="Username" required/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="fas fa-lock"></i></span><input type="password" name="pass" placeholder="Password" required />
                        </div>
                    </div>
                </div>
                <div class="form-actions center">
                    <!-- <span class="pull-right"><a type="submit" href="index.html" class="btn btn-success" /> Login</a></span> -->
                    <!-- <input type="submit" class="button" title="Log In" name="login" value="Admin Login"></input> -->
                    <button type="submit" class="btn btn-block btn-large btn-info" title="Log In" name="login" value="Admin Login">Admin Login</button>
                </div>
            </form>
            <?php
                if (isset($_POST['login']))
                    {
                        $username = mysqli_real_escape_string($con, $_POST['user']);
                        $password = mysqli_real_escape_string($con, $_POST['pass']);

                        $password = md5($password);
                        
                        $query 		= mysqli_query($con, "SELECT * FROM admin WHERE  password='$password' and username='$username'");
                        $row		= mysqli_fetch_array($query);
                        $num_row 	= mysqli_num_rows($query);
                        
                        if ($num_row > 0) 
                            {			
                                $_SESSION['user_id']=$row['user_id'];
                                header('location:admin/index.php');
                                
                            }
                        else
                            {
                                echo "<div class='alert alert-danger alert-dismissible' role='alert'>
                                Invalid Username and Password
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                                </div>";
                            }
                    }
            ?>
            <div class="pull-left">
            <a href="customer/index.php"><h6>Customer Login</h6></a>
            </div>

            <div class="pull-right">
            <a href="staff/index.php"><h6>Staff Login</h6></a>
            </div>
            
        </div>
        <div id="videowrap">
            <video autoplay muted loop id ="videobg" preload="auto" autoplay="true" loop>
                <source src="abc.mp4">
                </video>
                </div>

        
        
        <script src="js/jquery.min.js"></script>  
        <script src="js/matrix.login.js"></script> 
        <script src="js/bootstrap.min.js"></script> 
<script src="js/matrix.js"></script>
    </body>

<!--BELOW CODED BY PRATIK-->

    
    <style>
        #body{
            background-color:;
        }
body {
  background-image: url('.jpg') ;
  
  background-size: ;
  
  
 
}
.control-group {
    background-color: none;
    background-image:url('.jpg') ;
    opacity: ;
    mix-blend-mode:  ;
}
#loginbox form{
    background-color: transparent;

}
#loginbox .normal_text{
    background-color: transparent;
}
#form-actions center{
    background-color:transparent;
}
#h6{
    background-color:red;
}
#pull-right{
    background-color:red;
}
#h1,h2,h3,h4,h5,h6{
    color:aqua;
    background-color:;
   
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
  height:auto;
  width:100%;
  opacity: 100%;
}
.btn-info{
    background-color:red;
}
#videobg{
    position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
  height:auto;
  width:auto;
  z-index: -1;
  opacity: ;

}
</style>
<!---video autoplay muted loop id="myVideo">
  <source src=".mp4" type="video/mp4">
</video>
<div id="myVideo">
<video autoplay muted loop id="myVideo">
  <source src=".mp4" type="video/mp4"-->

</div>

 <!--coded by pratik -->
</html>
