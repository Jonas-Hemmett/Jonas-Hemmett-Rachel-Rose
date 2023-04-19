<?php
    $databaseName = 'JHEMMETT_labs';
    $dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $databaseName;
    $username = 'jhemmett_writer';
    $password = 'bwA8RrBGDuzL';
    
   $pdo = new PDO($dsn, $username, $password);
   ?>