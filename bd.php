  
<?php
    $dbloc = 'localhost';
    $dbuser = $dbname = 'user2';
    $dbpass = 'Qwerty123';
    $dsn = $dsn = "mysql:host={$dbloc};dbname={$dbname}";
    return new PDO($dsn, $dbuser, $dbpass);