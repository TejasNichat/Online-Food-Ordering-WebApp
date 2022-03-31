<?php
include "connection.php";  
session_start();
if(isset($_POST['login']))
{


$username = $_POST['username'];
$pass = $_POST['pass'];

$sql = "select * from Signup where username = '$username' AND password='$pass'";
$res = mysqli_query($conn, $sql);
//$row = mysqli_fetch_array($res, MYSQLI_ASSOC);  
$count = mysqli_num_rows($res);  
if($count == 1)
{
    $_SESSION['login_user']=$username;  //Initializing Session
    header("Location: home.php");
}
else
{
    ?>
    <h2>Incorrect Username or Password...Please try again</h2>
    <?php
}

}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <br />
    <br />

    <div class="login-card">
        <div class="log_head">
            <h1>LOGIN</h1>
            <img src="lock.png" alt="lock" class="lock" />
        </div>

        <div class="log_body">
            <form action="index.php" method="POST">
                <table width="200" border="0" align="center">
                    <tr>
                        <td><input placeholder="Username" name="username" type="text" name="loginid" class="log_user"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><input  name="pass" placeholder="Password" type="password" name="pass" class="log_Pass"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><input name="remember" type="checkbox" value="Remember Me"> Keep me logged in</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="login" class="login-submit" value="SIGN IN"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Don't have an account ? <a href="register.php" rel="register">Sign Up</a></td>
                    </tr>
                </table>

            </form>
        </div>

    </div>
</body>

</html>