<?php

   $host = 'localhost';
   $db = 'php_crud';
   $dbUsername = 'root';
   $password = '';
   $charset = 'utf8mb4';

   $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

   try  {
      $pdo = new PDO($dsn, $dbUsername, $password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch(PDOException $e) {
      //echo "<h1 class='text-danger'>No Database Found</h1>";
      throw new PDOException($e->getMessage());
   }

   require_once 'db.php';

   $crud = new crud($pdo);

   // $protocol = 'http'.(!empty($_SERVER['HTTPS']) ? 's' : '');
   // $currURL = $protocol.'://'.$_SERVER['SERVER_NAME'].substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], '/'));

?>