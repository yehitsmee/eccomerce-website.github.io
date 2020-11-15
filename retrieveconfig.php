<?php
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "eccomerce"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
 $sql = "select image from images";
 $result = mysqli_query($con,$sql);
 $row = mysqli_fetch_array($result);

 $image_src2 = $row['image'];
 
?>
<body>
<img src='<?php echo $image_src; ?>' >
</body>