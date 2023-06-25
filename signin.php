<?php
session_start();

include("db.php");

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $Email=$_POST['Email'];
    $Password=$_POST['Pass'];

    if(!empty($gmail)&& !empty(password)&& !is_numeric($gmail))
    {
        $query ="select * from form where email = '$gmail' limit 1";
        $result =mysqli_query($con,$query);

        if($result)
        {
            if($result && mysqli_query_num_row($result)>0)
            {
                $user_data = mysqli_fetch_assoc($result);

                if($user_data['pass']== $password)
                {
                    header("location:index.php");
                    die;

                }
            }
        }
        echo "<script type='text/javascript'> alert('wrong username or password')</script>";
    }
    else{
        echo "<script type='text/javascript'> alert('wrong username or password')</script>";
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

    <div class="login">
        <br>
        <h1> Login</h1>

    <form method="POST">
        <label>Email</label>
        <input type="text" name="mail"required>
        <label>Password</label>
        <input type="text" name="pass"required>
        <input type="submit" name=""  value="submit">
        </form>
    
        <p>Not have an account?<a href="signup.php">signup here </a></p>
</body>
</html>