<?php

require_once './db/conn.php';

if(isset($_POST['submit'])) {

   $id = $_POST['id'];
   $name = $_POST['fullname'];
   $email = $_POST['email'];
   $skills = $_POST['skills'];

   $isUpdated = $crud->updateUser($id, $name, $email, $skills);

   if($isUpdated) {
      header('Location: ' . $currURL);
    } else {
      echo "An error occurred while updating the user.";
    }

} else {
   echo "An error occurred while submitting a request.";
}

?>