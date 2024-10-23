<?php session_start();  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="header bg-success">
    <h1 class="text-center text-black  h2 p-2" style="height: 60px;">CRUD Operation Using PHP and MySql</h1>
    <p class="text-end text-primary h5 m-2">
                    <?php 
                    if(isset($_SESSION['uname'])){ 
                        echo 'Welcome <br> <span>'.$_SESSION['uname'].'</span>'; 
                    }else{
                        header('location:../index.php?msg=You need log in first!');
                    }
                        
                        ?> <br>
                    <a href="sessionOut.php" name="logout" class="btn btn-dark">Log out</a>
    </p>
    
    </div>
    
    <div class="container">