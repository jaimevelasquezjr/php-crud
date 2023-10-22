<?php


class Crud {

   private $db; // private database object

   public function __construct($conn)
   {
      $this->db = $conn; // constructor to initialize private variable to the database connection
   }

   public function getUsers() 
   {
      try {
         $sql = "SELECT * FROM `php_user`";
         $result = $this->db->query($sql);
         return $result;
      } catch (PDOException $e) {
         echo $e->getMessage();
         return false;
      }
   }
   
}

?>