<?php
require('dbt.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['Username'])){
        // removes backslashes
 $Username = stripslashes($_REQUEST['Username']);
        //escapes special characters in a string
 $Username = mysqli_real_escape_string($con,$Username);
 $Password = stripslashes($_REQUEST['Password']);
 $Password = mysqli_real_escape_string($con,$Password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `register` WHERE Username='$Username'
and Password='$Password'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['Username'] = $Username;
            // Redirect user to index.php
     //header("Location: index.html");
     echo "<script>window.open('index.html','_self')</script>";
         }else{
 echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='insert.php'>Register</a></div>";
 }
    }
?>