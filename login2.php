<?php
	session_start();
	$conn= new MySQLi('localhost','root','','eccomerce');
if($conn->connect_error){
	die('database error:.$conn->connect_error');
}
if(isset($_POST['logbtn'])){
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$run=mysqli_query($conn,"SELECT * FROM admin WHERE email='$email' AND user='$username' AND password='$password'");
	if(mysqli_num_rows($run)>0){
		$_SESSION['username']=$username;
		echo "<script>window.open('admin.html','_self')</script>";
	}else{
		echo "<script>alert('invalid user')</script>";
}
}
?>