<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "restaurant";

    $con = mysqli_connect($server,$user,$password,$db);

    if(!($con))
    {
        echo "Connection Error";
    }
?>