<?php
//直接アクセスされた時
if(!isset($_POST["post_user"])){
	header("location:login.php");
	exit;
}
session_start();
//受信データを変数に
$post_user = htmlspecialchars($_POST["post_user"],ENT_QUOTES);
$post_pass = htmlspecialchars($_POST["post_pass"],ENT_QUOTES);

require("require/db/dbConnect.php");
require("require/class/class_mtUser.php");
require("require/db/loginDB_select.php");

$_SESSION["user"] = ["regist_date" => "$regist_date", "user_id" => "$user_id", "user_name" => "$user_name", "email" => "$email", "profile" => "$profile", "user_img" => "$user_img"];

header("location:index.php");