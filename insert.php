<?php
$Username=$_POST['Username'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];

if(!empty($Username)|| !empty($Email) || !empty($Password)){
  
    $host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="eccomerce";
  //create connection
  $conn= new mysqli($host,$dbUsername,$dbPassword,$dbname);

  if(mysqli_connect_error()) {
  die('Connect Error('. mysqli_connect_errno().')' . mysqli_connect_error());
  }else{
  $SELECT="SELECT Email From register Where Email= ? Limit 1";
  $INSERT="INSERT Into register (Username,Email,Password) values(?,?,?)" ;

  //Prepare statement
  $stmt=$conn->prepare($SELECT);
  $stmt->bind_param("s",$Email);
  $stmt->execute();
  $stmt->bind_result($email);
  $stmt->store_result();
  $rnum=$stmt->num_rows;

  if($rnum==0){
   $stmt->close();

   $stmt=$conn->prepare($INSERT);
   $stmt->bind_param("sss",$Username,$Email,$Password);
   $stmt->execute();
   header('Location: index.html');
   echo "Registered successfully";
  }else{
   echo "Email already registered,login instead";

  }
  $stmt->close();
  $conn->close();


  }
	
}
else
{
  echo "All fiels are required";
  die();	
}
?>