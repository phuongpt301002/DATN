<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "datn_test_2";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        die("Connection failed:" . mysqli_connect_error());
    }
    else{
        echo "</br>";
    }
?>