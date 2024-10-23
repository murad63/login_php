<?php 
include '../includes/dbcon.php';

if(isset($_POST['reg'])){
    $uname = $_POST['uname'];
    $email = $_POST['email'];

    
    if($uname=="" || empty($uname) || $email=="" || empty($email)){
        header('location: ../registration.php?regMsg=You Need to fill the form properly');
    }else{

    $insertQuery = "INSERT INTO `users` (`id`, `user_name`, `email`) VALUES (NULL, '$uname', '$email')";
        
    $insertResult = mysqli_query($con, $insertQuery);

    if(!$insertResult){
        die('Data Insert Failed');
    }else{
        header('location:../registration.php?regMsg=Registration successful');
    }

}

}

?>