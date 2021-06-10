<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel -- Doctor On</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="index.php" method="post">
				<img src="img/avatar.svg">
				<h2 class="title">Administrator</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="uname">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="pass">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login" name="submit">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>

<?php
function SignIn()
{
    session_start();
    {
        if($_POST['uname']=='admin' && $_POST['pass']=='admin')
        {
            $_SESSION['userName'] = 'admin';
            //echo "Logging you in..";
            header( "Refresh:1; url=mainpage.php");
        }
        else {
            echo "Wrong Credentials!";
        }
    }
}
if(isset($_POST['submit']))
{
    SignIn();
}
