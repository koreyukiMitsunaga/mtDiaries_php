<?php
//直接アクセスされた時
if(!isset($_POST["userId"])){
	//header("location:regist.php");
	exit;
}
require("header.php");
//受信データを変数に
$regist_date = date("Y-m-d H:i:s");
$userName = htmlspecialchars($_POST["userName"],ENT_QUOTES);
$userId = htmlspecialchars($_POST["userId"],ENT_QUOTES);
$email = htmlspecialchars($_POST["email"],ENT_QUOTES);
$pass = htmlspecialchars($_POST["pass"],ENT_QUOTES);
require("require/db/dbConnect.php");
require("require/db/registDB_select.php");
?>
	<main class="innerCenter wt400">
	<h2>入力情報の確認</h2>
	<table class="test mg-t50">
		<tbody>
			<tr>
				<th>ユーザー名</th>
				<td><?php echo $userName;?></td>
			</tr>
			<tr>
				<th>ユーザーID</th>
				<td><?php echo $userId;?></td>
			</tr>
			<tr>
				<th>メールアドレス</th>
				<td>
					<?php echo $email;?>
				</td>
			</tr>
			<tr>
				<th>パスワード</th>
				<td>
					<?php
					$pass_count = mb_strlen($pass);
					for($i=0; $i<$pass_count; $i++){
						echo "*";
					}
					?>
					</td>
			</tr>
		</tbody>
	</table>
	<form method="post" action="registResult.php">
		<?php
		$regist = ["regist_date"=>"$regist_date", "userName"=>"$userName", "userId"=>"$userId", "email"=>"$email", "pass"=>"$pass"];
		foreach($regist as $key=>$value){
			echo "<input type='hidden' name='$key' value='$value'>";
		}
		?>
		<div class="formSubmit mg-t20">
			<input type="button" onclick="history.back()" value="戻る" class="mg-r20 btn glay opa">
			<input type="submit" value="登録" class="btn blue opa">
		</div>
	</form>
	</main>
<?php require("footer.php");?>