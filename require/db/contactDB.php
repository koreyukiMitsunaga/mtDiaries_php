<?php
$sql = "create table if not exists contact(c_date datetime, c_name varchar(20), c_email varchar(20) primary key, c_kind varchar(20), c_title varchar(50), c_text varchar(500))";
$stmt = $dbInfo->prepare( $sql );
$stmt->execute ();

$sql = "insert into contact(c_date, c_name, c_email, c_kind, c_title, c_text) value(:c_date, :c_name,  :c_email, :c_kind, :c_title, :c_text)";
$stmt = $dbInfo->prepare( $sql );
$stmt->bindParam ( ":c_date", $c_date, PDO::PARAM_STR );
$stmt->bindParam ( ":c_name", $c_name, PDO::PARAM_STR );
$stmt->bindParam ( ":c_email", $c_email, PDO::PARAM_STR );
$stmt->bindParam ( ":c_kind", $c_kind, PDO::PARAM_STR );
$stmt->bindParam ( ":c_title", $c_title, PDO::PARAM_STR );
$stmt->bindParam ( ":c_text", $c_text, PDO::PARAM_STR );
$stmt->execute ();

$dbInfo = null;