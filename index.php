<?php

$title = "List of Users";
require_once './inc/header.php';
require_once './db/conn.php';

$results = $crud->getUsers();

?>

<section class="intro h-100 py-5">
   <div class="gradient-custom-2 h-100">
      <div class="mask d-flex h-100">
         <div class="container">

            <?php  if($results) { ?>

            <div class="row justify-content-center">
               <div class="col-12">
                  <div class="table-responsive">
                     <table class="table table-dark table-bordered mb-0">
                        <thead>
                           <tr>
                              <th scope="col" class="w-25">NAME</th>
                              <th scope="col">EMAIL</th>
                              <th scope="col">SKILL</th>
                              <th scope="col" class="w-25 text-right">ACTION</th>
                           </tr>
                        </thead>
                        <tbody>

                           <?php while($data = $results->fetch(PDO::FETCH_ASSOC)) { ?>

                           <tr>
                              <th scope="row"><?php echo $data['name']; ?></th>
                              <td><?php echo $data['email']; ?></td>
                              <td><?php echo $data['skill']; ?></td>
                              <td class="text-right">
                                 <a href="#" class="btn btn-primary">View</a>
                                 <a href="/update.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Edit</a>
                                 <a href="#" class="btn btn-danger">Delete</a>
                              </td>
                           </tr>

                           <?php } ?>

                        </tbody>
                     </table>

                  </div>
               </div>
            </div>

            <?php } else { ?>

            <div class="row justify-content-center">
               <div class="col-12">
                  <div class="alert alert-info" role="alert">
                     There are no records to display.
                  </div>
               </div>
            </div>

            <?php } ?>

         </div>
      </div>
   </div>
</section>


<?php

require_once './inc/footer.php';

?>