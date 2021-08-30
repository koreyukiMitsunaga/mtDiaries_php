<?php
require("header.php");
?>
	<main class="innerCenter">
		<h2>管理者ログイン</h2>
		<form method="post" name="login" action="admin_login_result.php">
			<label>
				<p id="login_label2" class="formLabel mg-t50">パスワード</p>
				<input type="password" name="admin_pass" placeholder="パスワードを入力" id="login_post_pass"class="formBox wt200">
			</label>
			<div class="formSubmit mg-t50">
				<input type="submit" name="login" value="ログイン" class="login_sub btn blue opa">
			</div>
		</form>
	</main>
<?php require("footer.php");?>