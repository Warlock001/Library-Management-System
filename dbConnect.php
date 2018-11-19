<?php
   define('DB_SERVER', 'localhost:3306');
   define('DB_USERNAME', 'wishal100');
   define('DB_PASSWORD', 'wishal100');
   define('DB_DATABASE', 'lib_go');
   $con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die('Database has encountered an error!!! Please Try Again...');
?>
