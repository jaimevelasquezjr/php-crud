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
      // define('_USERID', $id);
      $data = $crud->getUserByID($id);

?>

<form class="w-25 mx-auto" method="post" action="editpost.php">
   <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
   <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="" name="fullname"
         value="<?php echo $data['name']; ?>">
      <label for="floatingInput">Name</label>
   </div>
   <div class="form-floating mb-3">
      <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com"
         value="<?php echo $data['email']; ?>">
      <label for="floatingInput">Email address</label>
   </div>
   <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="" name="skills"
         value="<?php echo $data['skill']; ?>">
      <label for="floatingInput">Skills</label>
   </div>

   <div class="bd-example">
      <a href="<?php echo $currURL; ?>" class="btn btn-light">Back</a>
      <button type="submit" name="submit" class="btn btn-primary">Save</button>
   </div>

</form>

<?php } ?>

<?php  require_once './inc/footer.php'; ?>