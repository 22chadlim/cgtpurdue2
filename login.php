<?php 
include "db_conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "SELECT email, password FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    echo "ID: " . $email . "<br>";
    echo "Password: " . $password . "<br>";

    if (mysqli_num_rows($result)){
        echo("Login Success");
    }
    else {
        echo("Login Failed");
    }

   }
