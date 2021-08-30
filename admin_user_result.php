<?php
$user_id = $_POST["user_id"];
require("require/db/dbConnect.php");
require("require/class/class_mtUser.php");
require("require/db/ad_userDB_edit.php");

$regist_date = $_POST["regist_date"];
$user_name = $_POST["user_name"];
$email = $_POST["email"];
$profile = "'".$_POST["profile"]."'";

if(!($_FILES["photo"]["name"]=="")){
	require("require/upload/uploadSetting.php");
}else{
	$file1 = $user_img;
}
if($profile=="''"){
	$profile= "null";
}

require("require/db/dbConnect.php");
$sql = "update user set regist_date = '$regist_date', user_name ='$user_name', email='$email', profile=$profile, user_img = '$file1' where user_id= '$user_id'";
$dbInfo->query($sql);
$dbInfo = null;
header("location:admin_user.php");
