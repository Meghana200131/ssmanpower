<?php

$errorMSG = "";

include('../conn.inc');


if(isset($_POST['submit'])){
           
// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

if (empty($_POST["Message"])) {
    $errorMSG .= "Email is required ";
} else {
    $message = $_POST["Message"];
}


 $sql = "INSERT INTO contact (name, email, message) VALUES (' $name','$email','$message')";

 $conn->exec($sql);
}

?>



