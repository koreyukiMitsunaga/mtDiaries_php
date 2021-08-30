<?php
$user_id = $_POST["user_id"];
require("require/db/dbConnect.php");
require("require/class/class_mtUser.php");
require("require/db/ad_userDB_edit.php");

?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="サイト説明文70文字程度">
<meta name="author" content="koreyuki mitsunaga">
<title>編集ページ</title>
<link href="css/normalize.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/admin_style.css" rel="stylesheet">
</head>

<body>
	<header>
		<div id="heading">
			<h1>管理ページ</h1>
		</div>
		<div id="lNavi">
			<ul>
				<li><h2><a href="admin_user.php" class="lNavi_hover">戻る</a></h2></li>
			</ul>
		</div>
	</header>
	<main class="innerForm">
		<form method="post" action="admin_user_result.php" enctype="multipart/form-data">
			<?php
				foreach($adUser_arry as $value){
					$value->ad_printDataEdit ();
				}
			?>
			<input type="submit" name="btn" value="更新" class="ad_submit btn blue opa mg-t50">
		</form>
		<form method="post" action="admin_user_delete.php">
			<input type="hidden" name="user_id" value="<?php echo $user_id;?>">
			<input type="submit" name="btn" value="記事を削除" class="ad_submit btn orenge opa mg-t20">
		</form>
	</main>
	<footer>
	</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/errCheck.js"></script>
</body>
</html>