<?php
if(session_status() !== PHP_SESSION_ACTIVE){
	session_start();
}
if(!($_SESSION==[])){
$session_user_id = $_SESSION["user"]["user_id"];
$session_user_name = $_SESSION["user"]["user_name"];
$session_user_prof = $_SESSION["user"]["profile"];
$session_user_userImg = $_SESSION["user"]["user_img"];
}
?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="サイト説明文70文字程度">
<meta name="author" content="koreyuki mitsunaga">
<title>山の日記帳</title>
<link href="css/normalize.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/tb_style.css" rel="stylesheet">
<link href="css/m_style.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<body>
<div id="wrapper">
	<!--ハンバーガーメニュー-->
	<div class="trigger">
		<div class="burger"></div>
		<div class="burger"></div>
		<div class="burger"></div>
	</div><!--/.trigger-->
	<div id="mNavi">
		<ul>
			<li><a href="index.php">トップ</a></li>
			<?php if(isset($session_user_id)):?>
				<li><a href="post.php">投稿</a></li>
				<li><a href="logout.php">ログアウト</a></li>
				<li><a href="myPage.php" id="gNavi_myPage">マイページ</a></li>
			<?php else:?>
				<li><a href="regist.php">会員登録</a></li>
				<li><a href="login.php">ログイン</a></li>
			<?php endif;?>
			<li><a href="search_m.php">検索</a></li>
			<li><a href="about.php">山の日記帳とは</a></li>
			<li><a href="contact.php">お問い合わせ</a></li>
		</ul>
	</div><!--/#mNavi-->
	<header>
		<div id="headerLeft">
			<h1 id="hL_logo">
				<a href="index.php"><img src="images/logo.png" alt="山の日記帳"></a>
			</h1>
			<div id="hL_img">
				<img src="images/mountain_header.png" alt="">
			</div><!--/#hL_img-->
		</div><!--/#headerLeft-->
		<nav id="gNavi">
			<ul>
				<li id="gNavi_search">
					<form action="search.php" name="search" method="post">
						<input type="search" name="search" class="textbox">
						<a href="javascript:search.submit()"><img src="images/search.png" alt=""></a>
					</form>
				</li>
				<?php if(isset($_SESSION["user"])):?>
					<li><a href="post.php" class="btn yellow opa">投稿</a></li>
					<li><a href="logout.php" class="btn blue opa">ログアウト</a></li>
					<li><a href="myPage.php" id="gNavi_myPage" class="opa"><img src="<?php echo $session_user_userImg;?>" alt=""></a></li>
				<?php else:?>
					<li><a href="regist.php" class="btn blue opa">会員登録</a></li>
					<li><a href="login.php" class="btn blue opa">ログイン</a></li>
				<?php endif;?>
			</ul>
		</nav>
	</header>
