<?php 

    include('header.inc');
    include('conn.inc');


       if(isset($_POST['submit'])){
          $name = $_POST['name'];
           $email = $_POST['email'];
          $contact = $_POST['contact'];

            $sql = "INSERT INTO ss (name, email, contact) VALUES (' $name','$email','$contact')";

          $conn->exec($sql);
       }
 ?>

<?php 

  include('content.inc');
 ?>
        

    