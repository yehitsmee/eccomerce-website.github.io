<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Comic Books</title>
<link rel="stylesheet" href="style1.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!-- Header section -->

<div class="header">
<div class="container">

<!-- Navigation Bar -->

<div class="navbar">
<div class="logo">
	<img src="logo2.png" width="125px">
</div>
<nav>
<ul id="MenuItems">
<li><a href="index.html">Home</a></li>
<li><a href="">Books</a></li>
<li><a href="">About</a></li>
<li><a href="">Contact</a></li>
<li><a href="account.html">Login</a></li> 
</ul>
</nav>
<img src="menulogo.png" class="menuicon" onclick="menutoggle()">
</div>
</div>
</div>
<br>


<!-- Fantasy Books -->

<div class="row">
    <?php
$host="localhost";
$username = "root"; 
$password = ""; 
$database = "eccomerce"; 
$mysqli = new mysqli($host, $username, $password, $database); 
$query=$mysqli->query("SELECT c.* , p.* FROM comic c, imagescomic p WHERE c.id=p.id");
while($row = $query->fetch_assoc())
{
 ?>
   <div class="col6">
    <tr>
       <td><p><?php 
           $imageURL = 'uploads/'.$row["file_name"]; 
            ?> 
          <img src="<?= $imageURL; ?>"/> </p></td>
    <td><h4><?php echo $row['name']; ?></h4></td>
    <td><small><?php echo $row['author']; ?></small></td>
    <td><p>&#x20B9;<?php echo $row['price']; ?></p></td>
    <a href="cart.html" class="btn">Add To Cart &#8594;</a>
    </div>
    </tr>
    <?php
}
?>

  </div>









<!-- Footer -->

<div class="footer">
<div class="container">
<div class="row">

<div class="footercol1">
<p>You can find novels of different genre in our Store.</p>
</div>


<div class="footercol3">
<h3>Useful Links</h3>
<ul>
	<a href=""><li>Discount sales</li></a>
	<a href="services.html"><li>Our services</li></a>
	
</ul>
</div>

<div class="footercol4">
<h3>Follow Us</h3>
<ul>
  <li><a href="" class="fa fa-instagram"></a>Instagram</li>
  <li><a href="" class="fa fa-facebook"></a>Facebook</li>
  <li><a href="" class="fa fa-twitter"></a>Twitter</li>
</ul>
</div>
</div>
</div>

<!-- Copyright -->

<hr>
<p class="copyright">&#169;Copyright 2020 - Online Book Store</p>
</div>
</div>

<!-- Menu Button -->
<script>
	var MenuItems=document.getElementById("MenuItems");
	MenuItems.style.maxHeight="0px";
	function menutoggle(){
		if(MenuItems.style.maxHeight=="0px")
		{
			MenuItems.style.maxHeight="200px";
		}
		else
		{
			MenuItems.style.maxHeight="0px";
		}
	}
</script>

</body>
</html>
