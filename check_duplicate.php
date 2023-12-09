<?php
include "db_conn.php";

$email_pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];

  $sql = "SELECT email FROM users WHERE email='$email'";
  $result = $conn->query($sql);

if(preg_match($email_pattern, $email)){

    if ($email==="example@abc.com"){
        echo "You CANNOT use example email.<br>";
    }
    else if (mysqli_num_rows($result)) {
        echo "You CANNOT use this ID.<br>"; 
    } else {
        echo "You can use this ID.<br>";
        $id_confirm = true;
    }
}
else {
    echo "Not valid email.";
}
 
}


?>