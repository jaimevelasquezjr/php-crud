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

   public function getUserByID($id) {
      try {
         $sql = "SELECT * FROM `php_user` WHERE id = :id"; // sql
      $stmt = $this->db->prepare($sql); 
      $stmt->bindparam(':id', $id); 
      $stmt->execute(); 
      $result = $stmt->fetch(); 
      return $result;
      } catch (PDOException $e) {
         echo $e->getMessage();
         return false;
      }
   }

   public function updateUser($id, $name, $email, $skills) {
      try {
         $sql = "UPDATE `php_user` SET `name` = :fname, `email` = :email, `skill` = :skill WHERE `php_user`.`id` = :id";

         $stmt = $this->db->prepare($sql);

         $stmt->bindparam(':id', $id);
         $stmt->bindparam(':name', $name);
         $stmt->bindparam(':email', $email);
         $stmt->bindparam(':skill', $skills);

         $stmt->execute();
         return true;

      } catch (PDOException $e) {
         echo $e->getMessage();
         return false;
      }
   }
   
}

?>