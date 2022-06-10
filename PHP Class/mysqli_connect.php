<?php # Script 9.2 Mysqli_connect.php
define('DB_USER', 'root');
define('DB_PASSWORD', '86eDbfmzs&*A7u');
define('DB_HOST', 'localhost');
define('DB_NAME','Local instance MySQL80' );

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Could not connect to MySQL: ' . mysqli_connect_error());

mysqli_set_charset($dbc, 'utf8');