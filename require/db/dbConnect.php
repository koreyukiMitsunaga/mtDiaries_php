<?php
$dsn = "mysql:dbname=mtDiaries;host=localhost;port=3306;charset=utf8";
$user = "root";
$password = "root";

$dbInfo = new PDO($dsn, $user, $password);