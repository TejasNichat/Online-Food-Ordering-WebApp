<?php
include "connection.php";  

if(isset($_POST['submit']))
{
// Fetching variables of the form which travels in URL
$name = $_POST['fname'];
$usrname = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pass = $_POST['password'];
$gender = $_POST['gender'];
$sql = "INSERT INTO Signup (fname, email, phone,gender,username,password)
VALUES ('$name','$email','$phone','$gender','$usrname','$pass')";

if ($conn->query($sql)) {?>
   <h1>Registeration Successful.</h1>
   <?php
  } else {?>
    <h3>Error...Please try to register again.</h3>
    <?php
  }
}
?>

        <!DOCTYPE html>
       
        <html lang="en" dir="ltr">

        <head>
            <meta charset="UTF-8">
           
            <link rel="stylesheet" href="style1.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>

        <body>
            <div class="container">
                <div class="title">Signup</div>
                <div class="content">
                    <form action="register.php" method="POST">
                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Full Name</span>
                                <input type="text" name="fname" placeholder="Enter your name" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Username</span>
                                <input type="text" name="username" placeholder="Enter your username" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Email</span>
                                <input type="text" name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Phone Number</span>
                                <input type="text" name="phone" placeholder="Enter your number" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Password</span>
                                <input type="text" name="password" placeholder="Enter your password" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Confirm Password</span>
                                <input type="text" placeholder="Confirm your password" required>
                            </div>
                        </div>
                        <div class="gender-details">
                            <input type="radio" name="gender" value="Male" id="dot-1">
                            <input type="radio" name="gender" value="Female" id="dot-2">
                            <input type="radio" name="gender" value="Other" id="dot-3">
                            <span class="gender-title">Gender</span>
                            <div class="category">
                                <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
                                <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
                                <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Others</span>
            </label>
                            </div>
                        </div>
                        <div class="button">
                            <input type="submit" name="submit" value="Signup">
                        </div>
                    </form>
                </div>
            </div>

        </body>

        </html>