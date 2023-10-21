<?php

require_once 'config.php';

class Database {

   public $host = DB_HOST;
   public $user = DB_USER;
   public $pass = DB_PASS;
   public $dbName = DB_NAME;

   public $link;
   public $error;

   public function __construct() {
      $this->connectDB();
   }

   private function connectDB() {

      $this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbName);

      if(!$this->link) {
         $this->error = "Connection failed {$this->link->coonect_error}";
         return false;
      }

   }
   
}

?>