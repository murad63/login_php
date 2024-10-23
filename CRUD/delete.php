<?php
    include 'dbcon.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    

    $query = "DELETE FROM students WHERE `students`.`ID` = '$id'";

    $qResult = mysqli_query($connection, $query);

    if(!$qResult){
        die('Delete Query is failed'.mysqli_error());
    }else{
        header('location: index.php?deleteMsg=Data Delete is Successful');
    }

    }

?>