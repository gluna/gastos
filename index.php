
<?php include 'menu.php'; ?>

<div class="w3-container w3-content" style="margin-top:20px;width:70%">

    <div class="w3-card-2 w3-padding" >
      <p>teste</p>

      <?php

        echo "ponto 1 \n";
        $dir = getcwd();

        $path = $dir . '/db/gastos.sqlite3';
        //echo $path;
        $db = new PDO('sqlite:' . $path);
        //$db = new SQLite($path);
        echo "ponto 2";

        $res = $db->query('select * from tipogasto');

        echo 'ponto 3';

        foreach ($res as $row) {

           echo $row[1] . '\n';

         }

        echo 'ponto 4';
      ?>
    </div>

</div>
<?php include 'footer' ?>
