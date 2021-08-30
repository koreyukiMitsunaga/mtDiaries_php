<?php
//直接アクセスされた時
if(!isset($_POST["c_text"])){
	header("location:contact.php");
	exit;
}
require("header.php");
//受信データを変数に
$c_date = htmlspecialchars($_POST["c_date"],ENT_QUOTES);
$c_name = htmlspecialchars($_POST["c_name"],ENT_QUOTES);
$c_email = htmlspecialchars($_POST["c_email"],ENT_QUOTES);
$c_kind = htmlspecialchars($_POST["c_kind"],ENT_QUOTES);
$c_title = htmlspecialchars($_POST["c_title"],ENT_QUOTES);
$c_text = htmlspecialchars($_POST["c_text"],ENT_QUOTES);

require("require/db/dbConnect.php");
require("require/db/contactDB.php");
?>
	<main class="innerCenter wt300">
		<h2>お問い合わせ<br>ありがとうございました</h2>
		<p class="mg-t50"><img src="images/thanks.png"></p>
		<a href="index.php"><p class="mg-t50">＜トップへ</p></a>
	</main>
<?php require("footer.php");?>