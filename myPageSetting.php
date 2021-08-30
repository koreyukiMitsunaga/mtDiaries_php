<?php
require("header.php");
require("require/db/dbConnect.php");
require("require/class/class_mtPost.php");
require("require/db/mpDB_selectRev.php");
$test;
?>
	<main>
		<div id="setting" class="innerForm">
			<h2>アカウント設定</h2>
			<form method="post" name="settingPost" action="myPageSettingResult.php" enctype="multipart/form-data">
				<div class="post_rel">
					<p class="formLabel mg-t50"><span id="setting_label1">アカウント画像</span></p>
					<label>
						<div class="post_fileBtn glay"><span><input type="file" name="photo" id="photo" class="formPhoto"></span></div>
						<p class="post_fileBtn_text"><i class="far fa-image"></i>画像を変更する</p>
					</label>
					<p><img src="<?php echo $session_user_userImg;?>" id="preview" class="mg-t10"></p>
				</div>
				<label>
					<p class="formLabel mg-t50"><span id="setting_label2">ユーザー名&nbsp;</span></p>
					<input type="text" name="name" value="<?php echo $session_user_name;?>" id="settingName" class="formBox">
				</label>
				<label>
					<p class="formLabel mg-t50"><span id="setting_label3">プロフィール&nbsp;</span></p>
					<textarea name="prof" rows="3" cols="43" id="settingProf" class="formBox"><?php echo $session_user_prof;?></textarea>
				</label>
				<div class="mg-t10 al_right">
					<input type="button" onclick="history.back()" name="back" value="戻る" class="settingSubmit btn glay opa">
					<input type="submit" name="submit" value="更新" class="settingSubmit btn blue opa">
				</div>
			</form>
		</div><!--/#setting-->
		
	</main>
<?php require("footer.php");?>