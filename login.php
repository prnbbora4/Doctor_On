<?php
session_start();
if(isset($_SESSION['email']) )
{
    header("location:profile.php");
    //die();
}
//connect to database
$db=mysqli_connect("localhost","root","","doctor_on");
if($db)
{
    if(isset($_POST['login_btn']))
    {
        $email=mysqli_real_escape_string($db,$_POST['email']);
        $password=mysqli_real_escape_string($db,$_POST['password']);
        $password=md5($password); //Remember we hashed password before storing last time
        $sql="SELECT * FROM signup WHERE  email='$email' AND password='$password'";
        $result=mysqli_query($db,$sql);
        //print_r($sql);
        //print_r($result);

        if($result)
        {
            //print_r($result);
            if( mysqli_num_rows($result)>=1)
            {
                $_SESSION['message']="You are now Loggged In";
                $_SESSION['email']=$email;
                header("location:profile.php");
            }
            else
            {
                header("location:abc.php");
                $_SESSION['message']="Email and Password combination incorrect";
            }
        }
    }
}