<?php

include "db_conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    

    
    if($password === $password_confirm){

      
      $sql = "INSERT INTO users (email, password, username) VALUES ('$email', '$password', '$name')";
      $result = $conn->query($sql);

      echo "Sign up completed! <br>";
      echo "Welcome".$email."!";
   
    }
    
    else{
      echo "Password didn't match.";
    }
   }
?>
