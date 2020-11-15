<?php

    $db = mysqli_connect("localhost", "root", "", "eccomerce");


    if($db === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $name = mysqli_real_escape_string($db, $_POST['name']);
    $author = mysqli_real_escape_string($db, $_POST['author']);
    $price = mysqli_real_escape_string($db, $_POST['price']);

    $sql = "INSERT INTO auto (name, author, price) VALUES ('$name', '$author', '$price')";

    if(mysqli_query($db, $sql)){
        echo "<script>window.open('insertconfigauto.html','_self')</script>";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
    }

    // close connection
    mysqli_close($db);