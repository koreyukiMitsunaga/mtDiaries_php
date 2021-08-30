<?php
if(!isset($id_err) && !isset($email_err)){
require("header.php");
}
if(!isset($userName)){$userName="";}
if(!isset($userId)){$userId="";}
if(!isset($email)){$email="";}
if(!isset($pass)){$pass="";}
?>
	<main>
		<div class="innerCenter">
			<h2>会員登録</h2>
			<form method="post" name="regist" action="registCheck.php">
				<label>
					<p class="formLabel mg-t50"><span id="reg_label1">ユーザー名&nbsp;</span><span id="reg_count1" class="font_min">0</span><span class="font_min">/20</span></p>
					<input type="text" name="userName" value="<?php echo $userName;?>" placeholder="ユーザー名を入力" id="reg_userName" class="formBox wt200">
				</label>
				<label>
					<p class="formLabel mg-t50"><span id="reg_label2">ユーザーid&nbsp;</span><span id="reg_count2" class="font_min">0</span><span class="font_min">/20</span></p>
					<input type="text" name="userId" value="<?php echo $userId;?>" placeholder="ユーザーidを入力" id="reg_userId" class="formBox wt200">
				</label>
				<label>
					<p class="formLabel mg-t50"><span id="reg_label3">メールアドレス&nbsp;</span><span id="reg_count3" class="font_min">0</span><span class="font_min">/255</span></p>
					<input type="text" name="email" value="<?php echo $email;?>" placeholder="メールアドレスを入力" id="reg_email" class="formBox wt200">
				</label>
				<label>
					<p class="formLabel mg-t50"><span id="reg_label4">パスワード&nbsp;</span><span id="reg_count4" class="font_min">0</span><span class="font_min">/20</span></p>
					<input type="password" name="pass" value="<?php echo $pass;?>" placeholder="パスワードを入力" id="reg_pass" class="formBox wt200">
				</label>
				<!--phpの変数をjsに送るためのコード 非表示 start-->
				<p id="id_err" class="d_none"><?php echo $id_err;?></p>
				<p id="email_err" class="d_none"><?php echo $email_err;?></p>
				<!--end-->
				<div class="formSubmit mg-t50">
					<input type="submit" name="regist" value="確認" class="regist_sub btn blue opa">
				</div>
			</form>
		</div><!--/.innerForm-->
	</main>
<?php require("footer.php");?>