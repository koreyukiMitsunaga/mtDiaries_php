<?php
require("header.php");
if(!($_FILES["photo"]["name"]=="")){
	require("require/upload/uploadSetting.php");
}else{
	$file1 = $_SESSION["user"]["user_img"];
}
//直接アクセスされた時
//if(!isset($_POST["post_user"])){
//	header("location:login.php");
//	exit;
//}

//受信データを変数に
$regist_date = $_SESSION["user"]["regist_date"];
$user_id = $_SESSION["user"]["user_id"];
$setting_name = htmlspecialchars($_POST["name"],ENT_QUOTES);
$setting_prof = htmlspecialchars($_POST["prof"],ENT_QUOTES);
$setting_img = $file1;

require("require/db/dbConnect.php");
require("require/db/settingDB_select.php");

$_SESSION["user"] = ["regist_date" => "$regist_date", "user_id" => "$user_id", "user_name" => "$setting_name", "profile" => "$setting_prof", "user_img" => "$setting_img"];
?>
	<main class="innerCenter wt300">
		<h2>設定を更新しました</h2>
		<p class="mg-t50"><img src="images/thanks.png"></p>
		<a href="myPage.php"><p class="mg-t50">＜マイページへ</p></a>
	</main>
<?php require("footer.php");?>