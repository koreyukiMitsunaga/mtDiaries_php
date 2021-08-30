<?php
$sql = "create table if not exists user(regist_date datetime, user_id varchar(20) primary key, user_name varchar(20), email varchar(20), password varchar(20))";
$stmt = $dbInfo->prepare( $sql );
$stmt->execute ();

$sql = "insert into user(regist_date, user_id, user_name, email, password) value(:regist_date, :user_id, :user_name, :email, :password)";
$stmt = $dbInfo->prepare( $sql );
$stmt->bindParam ( ":regist_date", $regist_date, PDO::PARAM_STR );
$stmt->bindParam ( ":user_id", $userId, PDO::PARAM_STR );
$stmt->bindParam ( ":user_name", $userName, PDO::PARAM_STR );
$stmt->bindParam ( ":email", $email, PDO::PARAM_STR );
$stmt->bindParam ( ":password", $pass_hash, PDO::PARAM_STR );
$stmt->execute ();

$dbInfo = null;