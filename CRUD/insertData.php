<?php
    include 'dbcon.php';
    if(isset($_POST['addStudent'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];

        
        if($fname=="" || empty($fname)){
            header('location: index.php?message=You Need to fill the First Name');
        }elseif($lname=="" || empty($lname)){
            header('location: index.php?message2=You Need to fill the Last Name');
        }elseif($age=="" || empty($age)){
            header('location: index.php?message3=You Need to fill the Age');
        }else{

        $insertQuery = "INSERT INTO `students` (`first_name`, `last_name`, `age`) VALUES ('$fname', '$lname', '$age')";
            
        $insertResult = mysqli_query($connection, $insertQuery);

        if(!$insertResult){
            die('Data Insert Failed');
        }else{
            header('location:index.php?insertMsg=Your Data has been added successful');
        }

    }

    }