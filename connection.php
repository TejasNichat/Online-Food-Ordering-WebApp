<?php  
       $servername = "localhost";  
       $username = "localhost";  
       $password = "localhost123";  
       $conn = mysqli_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysqli_select_db ($conn,'foodordersystem') or die("unable to connect to database"); 
?> 