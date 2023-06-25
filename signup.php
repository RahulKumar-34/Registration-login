<?php
session_start();

include("db.php");

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $Email=$_POST['Email'];
    $Username=$_POST['Username'];
    $Password=$_POST['Pass'];
    $Confirmpassword=$_POST['confirmpassword'];

    if(!empty($gmail)&& !empty(password)&& !is_numeric($gmail))
    {
        $query="insert into form(email,username,pass,confirmpassword)value('$Email','$Username','$Password')";

       mysqli_query($con, $query);

      echo "<script type='text/javascript'> alert('successfully Register')</script>";
    }
    else{
        echo "<script type='text/javascript'> alert('Plese Enter some Valide Information')</script>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

  <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="signup">
        <br>
        <h1> Registration Form </h1>

    <form method="POST">
        <label>Email</label>
        <input type="text" name="Email"required>
        <label>Username</label>
        <input type="text" name="Username"required>
        <label>Password</label>
        <input type="text" name="Pass"required>
        <label>Confirm Password</label>
        <input type="text" name="Confirmpassword"required>
        <input type="Submit" name=""  value="Submit">
        </form>
        <p>By clicking the Sign up button you agree to our
        <a href=""> Terams and condition </a> and <a href="#"></a>policy privacy </a></p>
        <p>Alredy have an account?<a href="signin.php">Login here

        </a></p>
        

</body>
</html>