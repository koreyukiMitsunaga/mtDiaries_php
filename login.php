<?php
require("header.php");
if(!isset($post_user)){$post_user="";}
if(!isset($post_pass)){$post_pass="";}
?>
	<main class="innerCenter">
		<h2>ログイン</h2>
		<form method="post" name="login" action="loginResult.php">
			<label>
				<p id="login_label1" class="formLabel mg-t50">id または メールアドレス</p>
				<input type="text" name="post_user" value="<?php echo $post_user;?>" placeholder="idかアドレスを入力" id="login_post_user" class="formBox wt200">
			</label>
			<label>
				<p id="login_label2" class="formLabel mg-t50">パスワード</p>
				<input type="password" name="post_pass" value="<?php echo $post_pass;?>" placeholder="パスワードを入力" id="login_post_pass"class="formBox wt200">
			</label>
			<!--phpの変数をjsに送るためのコード（非表示) start-->
			<p id="err" class="d_none"><?php echo $err;?></p>
			<!--end-->
			<div class="formSubmit mg-t50">
				<input type="submit" name="login" value="ログイン" class="login_sub btn blue opa">
			</div>
		</form>
	</main>
<?php require("footer.php");?>