<?php
if(!($_POST["admin_pass"]=='adminroot')){
	header("location:admin_login.php");
}else{
	header("location:admin_user.php");
}