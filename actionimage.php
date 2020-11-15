<html>
<head>
<meta charset="UTF-8">
<title>Ecommerce Website Design</title>
<link rel="stylesheet" href="style1.css">
<style>
.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
  left: 0;
  background-color: #111;
}

.right {
  right: 0;
  background-color: red;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
.centered img {
  width: 150px;
  border-radius: 50%;
}
</style>
</head>
<body>
  
<table align="center" border="1" width="100%">
<tr>
<th>id</th>
<th>name</th>
<th>author</th>
<th>price</th>
<th>image</th>
</tr>
<?php
$host="localhost";
$username = "root"; 
$password = ""; 
$database = "eccomerce"; 
$mysqli = new mysqli($host, $username, $password, $database); 
$query=$mysqli->query("SELECT c.* , p.* FROM action c,imagesaction p WHERE c.id=p.id");
while($row = $query->fetch_assoc())
{
 ?>
    <tr>
    <td><p><?php echo $row['id']; ?></p></td>
    <td><p><?php echo $row['name']; ?></p></td>
    <td><p><?php echo $row['author']; ?></p></td>
    <td><p><?php echo $row['price']; ?></p></td>
    <td><p><?php 
           $imageURL = 'uploads/'.$row["file_name"]; 
            ?> 
          <img src="<?= $imageURL; ?>"/> </p></td>
    </tr>
    <?php
}
?>
<a href="admin.html"><button style="background-color: #ff523b; width: 100px; height: 50px; float:left;">Home</button></a>
</table>
</body>
</html>