<?php

 
//define('BASE_PATH','');
//define('DB_HOST', 'localhost');
//define('DB_NAME', 'o');
//define('DB_USER','');
//define('DB_PASSWORD','demopass');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

?>