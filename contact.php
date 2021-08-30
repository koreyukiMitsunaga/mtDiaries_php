<?php
require("header.php");
//session_start();
if(!isset($c_name)){$c_name="";}
if(!isset($c_email)){$c_email="";}
if(!isset($c_kind)){$c_kind=[];}
if(!isset($c_title)){$c_title="";}
if(!isset($c_text)){$c_text="";}
$kind_arr = ["select" => "選択してください", "how" => "山の日記帳の使い方", "bug" => "不具合について", "Impression" => "ご意見・ご感想", "other" => "その他"];
?>
	<main>
		<div class="innerForm">
			<div class="al_center"><h2>お問い合わせ</h2></div>
			<form method="post" name="contact" action="contactCheck.php">
				<?php if(!isset($_SESSION["user"])):?>
				<label >
					<p class="formLabel mg-t50"><span id="contact_label1">お名前&nbsp;</span><span id="contact_count1" class="font_min">0</span><span class="font_min">/30&nbsp;</span></p>
					<input type="text" name="c_name" value="<?php echo $c_name;?>" id="contactName" class="formBox wt300">
				</label>
				<label >
					<p class="formLabel mg-t50"><span id="contact_label2">メールアドレス&nbsp;</span><span id="contact_count2" class="font_min">0</span><span class="font_min">/255&nbsp;</span></p>
					<input type="text" name="c_email" value="<?php echo $c_email;?>" id="contactEmail" class="formBox wt300">
				</label>
				<?php endif;?>
				<label>
					<p class="formLabel mg-t50"><span id="contact_label3">お問い合わせの種類&nbsp;</span></p>
					<select name="c_kind" id="contactKind" class="formBox formSelect">
						<?php
						foreach($kind_arr as $key => $value){
							echo "<option value='$key'";
							if($c_kind==$value){echo "selected";}
							echo ">{$value}</option>";
						}
						?>
					</select>
				</label>
				<label>
					<p class="formLabel mg-t50"><span id="contact_label4">お問い合わせの件名&nbsp;</span><span id="contact_count4" class="font_min">0</span><span class="font_min">/50&nbsp;</span></p>
					<input type="text" name="c_title" value="<?php echo $c_title;?>" id="contactTitle" class="formBox">
				</label>
				<label>
					<p class="formLabel mg-t50"><span id="contact_label5">お問い合わせの内容&nbsp;</span><span id="contact_count5" class="font_min">0</span><span class="font_min">/500&nbsp;</span></p>
					<textarea name="c_text" rows="10" cols="43" id="contactText" class="formBox"><?php echo $c_text;?></textarea>
				</label>
				<div class="mg-t20 al_right">
					<input type="submit" name="post" value="確認" class="contactSubmit btn blue opa">
				</div>
				<p id="contact_errMessage" class="al_right mg-t20"></p>
			</form>
		</div><!--/#innerForm-->
	</main>
<?php require("footer.php");?>