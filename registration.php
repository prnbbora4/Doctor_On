<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","doctor_on");
if(isset($_POST['registration_btn']))
{
    $fname=mysqli_real_escape_string($db,$_POST['fname']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $password=mysqli_real_escape_string($db,$_POST['password']);
    $password2=mysqli_real_escape_string($db,$_POST['password2']);
    $query = "SELECT * FROM signup WHERE email = '$email'";
    $result=mysqli_query($db,$query);
    if($result)
    {

        if( mysqli_num_rows($result) > 0)
        {

            echo '<script language="javascript">';
            echo 'alert("Email already exists")';
            echo '</script>';
        }

        else
        {

            if($password==$password2)
            {           //Create User
                $password=md5($password); //hash password before storing for security purposes
                $sql="INSERT INTO signup(fname, email, password) VALUES('$fname','$email','$password')";
                mysqli_query($db,$sql);
                $_SESSION['email']=$email;
                //print_r($sql);
                //print_r($password);
                header("location:index.php");  //redirect index page
            }
            else
            {
                $_SESSION['message']="The two password do not match";
            }
        }
    }
}
