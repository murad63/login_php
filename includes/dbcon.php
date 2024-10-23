<?php
    define("HOSTNAME","localhost");
    define("USERNAME","root");
    define("PASSWORD","");
    define("DATABASE","login_system");

    $con = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

    if(!$con){
        die('connection failed'.mysqli_error());
    }else{
        
    }

?>