<?php
//直接アクセスされた時
if(!isset($_POST["c_text"])){
	header("location:contact.php");
	exit;
}
require("header.php");
//受信データを変数に
$c_date = date("Y-m-d H:i:s");
if(!isset($_SESSION["user"])){
	$c_name = htmlspecialchars($_POST["c_name"],ENT_QUOTES);
	$c_email = htmlspecialchars($_POST["c_email"],ENT_QUOTES);
}else{
	$c_name = $_SESSION["user"]["user_name"];
	$c_email = $_SESSION["user"]["email"];
}
$c_kind = $_POST["c_kind"];
$c_title = htmlspecialchars($_POST["c_title"],ENT_QUOTES);
$c_text = htmlspecialchars($_POST["c_text"],ENT_QUOTES);

$kind_arr =  ["select" => "選択してください", "how" => "山の日記帳の使い方", "bug" => "不具合について", "Impression" => "ご意見・ご感想", "other" => "その他"];
foreach($kind_arr as $key => $value){
	if($key===$c_kind){
		$c_kindVal = $value;
	}
}
?>
	<main class="innerCenter wt400">
	<h2>入力情報の確認</h2>
	<table class="mg-t50">
		<tbody>
			<tr>
				<th>お名前</th>
				<td><?php echo $c_name;?></td>
			</tr>
			<tr>
				<th>メールアドレス</th>
				<td><?php echo $c_email;?></td>
			</tr>
			<tr>
				<th>お問い合わせの種類</th>
				<td><?php echo $c_kindVal;?></td>
			</tr>
			<tr>
				<th>お問い合わせの件名</th>
				<td><?php echo $c_title;?></td>
			</tr>
			<tr>
				<th>お問い合わせの内容</th>
				<td><?php echo $c_text;?></td>
			</tr>
		</tbody>
	</table>
	<form method="post" action="contactResult.php">
		<?php
		$contact = ["c_date"=>"$c_date", "c_name"=>"$c_name", "c_email"=>"$c_email", "c_kind"=>"$c_kindVal", "c_title"=>"$c_title", "c_text"=>"$c_text"];
		foreach($contact as $key=>$value){
			echo "<input type='hidden' name='$key' value='$value'>";
		}
		?>
		<div class="formSubmit mg-t20">
			<input type="button" onclick="history.back()" value="戻る" class="mg-r20 btn glay opa">
			<input type="submit" value="送信" class="btn blue opa">
		</div>
	</form>
	</main>
<?php require("footer.php");?>