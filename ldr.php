<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>The Lord Of The Rings</title>
<link rel="stylesheet" href="style1.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>




<div class="container">

<!-- Navigation Bar -->

<div class="navbar">
<div class="logo">
	<img src="logo2.png" width="125px">
</div>
<nav>
<ul id="MenuItems">
<li><a href="index.html">Home</a></li>
<li><a href="explore.php">Books</a></li>
<li><a href="">About</a></li>
<li><a href="">Contact</a></li>
<li><a href="account.html">Login</a></li> 
</ul>
</nav>
<img src="menulogo.png" class="menuicon" onclick="menutoggle()">
</div>
</div><br>


<!----single product details ----->

<div class="container single-product">
  <div class="row">
    <div class="col2">
      <img src="ldr3.png" width="100%" id="ProductImg">

      <div class="small-img-row">
        <div class="small-img-col">
          <img src="ldr4.jpg" width="100%" class="small-img">
        </div>
        <div class="small-img-col">
          <img src="ldr4.jpg" width="100%" class="small-img">
        </div>
        <div class="small-img-col">
          <img src="ldr4.jpg" width="100%" class="small-img">
        </div>
        <div class="small-img-col">
          <img src="ldr4.jpg" width="100%" class="small-img">
        </div>
      </div>
    </div>
    <div class="col2">
      <p>Categories/Fantasy</p>
      <h1>The Lord Of The Rings Series</h1>
      <h4 style="color: #ff523b;"><s style="color: black;">&#x20B9;3,500</s>    &#x20B9;2,500</h4>
      <select>
        <option>UK version</option>
        <option>US version</option>

      </select>
      <a href="cart.html" class="btn">Add To Cart &#8594;</a>
      <h3>Product Details</h3>
      <p>The Lord of the Rings is an epic high fantasy novel by the English author and scholar J. R. R. Tolkien. Set in Middle-earth, the world at some distant time in the past, the story began as a sequel to Tolkien's 1937 children's book The Hobbit, but eventually developed into a much larger work. Written in stages between 1937 and 1949, The Lord of the Rings is one of the best-selling books ever written, with over 150 million copies sold.</p><br>
    </div>
  </div>
   <a href="index.html"><button style="background-color: #ff523b; width: 100px; height: 50px; float: right;">Home</button></a>
</div><br><br><br><br>









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


<!----------js for product gallery --------->

<script>
  var ProductImg=document.getElementById("ProductImg");
  var SmallImg=document.getElementByClassName("small-img");

  SmallImg[0].onclick=function()
  {
    ProductImg.src=SmallImg[0].src;
  }
  SmallImg[1].onclick=function()
  {
    ProductImg.src=SmallImg[1].src;
  }
  SmallImg[2].onclick=function()
  {
    ProductImg.src=SmallImg[2].src;
  }
  SmallImg[3].onclick=function()
  {
    ProductImg.src=SmallImg[3].src;
  }
</script>

</body>
</html>
