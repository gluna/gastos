<?php

function connectdb() {
    //if ($this->pdo == null) {
      $dir = getcwd();
      $path = $dir . '/db/gastos.sqlite3';
      //echo $path;
      $db = new PDO('sqlite:' . $path);
    //}
    return $db;
}

?>
