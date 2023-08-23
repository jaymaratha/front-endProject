<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $name = $_POST["name"];
    $username = $_POST["username"];
    $pwd = $_POST["password"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];

    $servername = "localhost";
	$usename = "root";
	$password = "root";
	$dbname = "travel";


    $sqlinsert = "insert into users(name, username,password,email,mobile_no) values('$name', '$username', '$pwd', '$email', '$mobile')";

    $conn = new MySqli($servername, $usename, $password, $dbname);

    $conn->query($sqlinsert);

    header("Location: login.html");
}
?>