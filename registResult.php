<?php
//直接アクセスされた時
if(!isset($_POST["userId"])){
	header("location:post.php");
	exit;
}
require("header.php");
//受信データを変数に
$regist_date = htmlspecialchars($_POST["regist_date"],ENT_QUOTES);
$userName = htmlspecialchars($_POST["userName"],ENT_QUOTES);
$userId = htmlspecialchars($_POST["userId"],ENT_QUOTES);
$email = htmlspecialchars($_POST["email"],ENT_QUOTES);
$pass = htmlspecialchars($_POST["pass"],ENT_QUOTES);
$pass_hash = password_hash($pass, PASSWORD_DEFAULT);
//db connect
require("require/db/dbConnect.php");
require("require/db/registDB.php");
?>
	<main class="innerCenter wt300">
		<h2>会員登録しました</h2>
		<p class="mg-t50"><img src="images/thanks.png"></p>
		<a href="login.php"><p class="mg-t50">＜ログイン画面へ</p></a>
	</main>
<?php require("footer.php");?>