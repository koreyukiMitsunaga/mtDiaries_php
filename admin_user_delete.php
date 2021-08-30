<?php
echo $_POST["user_id"];

$user_id = $_POST["user_id"];
require("require/db/dbConnect.php");

$sql = "delete from user where user_id = '$user_id'";
$dbInfo->query($sql);

// データベースの切断
$dbInfo = null;
header("location:admin_user.php");