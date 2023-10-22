<?php

$title = "Edit User";
require_once './inc/header.php';
require_once './db/conn.php';

if(!isset($_GET['id'])) { ?>

<div class="container">
   <div class="row justify-content-center">
      <div class="col-12">
         <div class="alert alert-danger" role="alert">
            There are no existing ID.
         </div>
      </div>
   </div>
</div>
</div>

<?php
   } else {

      $id = $_GET['id'];
      

?>

<form class="w-25 mx-auto">
   <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="">
      <label for="floatingInput">Name</label>
   </div>
   <div class="form-floating mb-3">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
   </div>
   <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="">
      <label for="floatingInput">Skills</label>
   </div>

   <button type="submit" class="btn btn-primary">Save</button>
</form>

<?php } ?>

<?php  require_once './inc/footer.php'; ?>