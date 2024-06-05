<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "datn_test_2";

//Kết nối đến MySQL với PHP
$conn = mysqli_connect($server, $username, $password, $database);

//Kiểm tra kết nối
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}