<?php
include 'dbcon.php';
session_start();

if(isset($_POST['login'])){
    $uname = $_POST['uname'];
    $email = $_POST['email'];

}

$query = "SELECT * FROM `users` WHERE `user_name` = '$uname' and `email` = '$email' ";

$qResult = mysqli_query($con, $query);

if(!$qResult){
    die("Query is failed".mysqli_error());
}else {
    $row = mysqli_num_rows($qResult);
    if($row ==1){
        $_SESSION['uname'] = $uname;
        header('location:../crud/index.php');
    }else{
        header('location:../index.php?msg=Enter correct User Name or Email');
    }
}

?>