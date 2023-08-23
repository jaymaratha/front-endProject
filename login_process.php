<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    $username = $_POST["username"];
    $pwd = $_POST["password"];

    
    $servername = "localhost";
    $usename = "root";
    $password = "root";
    $dbname = "travel";

    $sql = "select * from users where username = '$username' and password = '$pwd'";

    $conn = new mysqli($servername, $usename,$password,$dbname);


    $rs = $conn->query($sql);

    if($rs->num_rows>0){
        while($row = $rs->fetch_assoc()){
            $namee = $row['username'];
            $passwd = $row['password'];

            if($username == $namee && $pwd == $passwd){

                header("Location: index.html");
        }
        else{
        header("Location: login.html?error=1");
    }
    }
}
}
?>
