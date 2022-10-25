<?php
private $pdo;

 /**
  * return in instance of the PDO object that connects to the SQLite database
  * @return \PDO
  */
 public function connect() {
     if ($this->pdo == null) {
         $this->pdo = new \PDO("sqlite:db/combadd.sqlite");
     }
     return $this->pdo;
 }

 public function connect2(){
   $dir = 'sqlite:db/combadd.sqlite';
   $dbh  = new PDO($dir) or die("cannot open the database");
 }
  ?>
