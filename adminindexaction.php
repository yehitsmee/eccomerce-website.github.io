<!DOCTYPE html>
<html lang="en">    
<head>
<meta charset="UTF-8">    
<title>Add Record Form</title>
</head>

<body>
    <div>      
<h1>Insert record into database</h1>
<form action="admininsertaction.php" method="post" enctype="multipart/form-data">
    <p>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">    
    </p>

    <p>
        <label for="author">Author:</label>
        <input type="text" name="author" id="author">    
    </p>

    <p>    
        <label for="price">Price:</label>
        <input type="text" name="price" id="price">    
    </p>
    <input type="submit" value="Submit">
</form>

</div>
<h1>View the database</h1>
<button id="myButton" class="float-left submit-button" >Display content of database</button>

<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "actionimage.php";
    };
</script>
</body>
</html>