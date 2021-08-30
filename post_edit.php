<?php
require("header.php");
$edit_post_id = $_POST["post_id"];
require("require/db/dbConnect.php");
require("require/class/class_mtPost.php");
require("require/db/editDB_select.php");
if(!isset($file1)){$file1="";}
if(!isset($title)){$title="";}
if(!isset($mountain)){$mountain=[];}
if(!isset($entryDate)){$entryDate="";}
if(!isset($descentDate)){$descentDate="";}
if(!isset($weather)){$weather="";}
if(!isset($course1)){$course1="";}
if(!isset($course2)){$course2="";}
if(!isset($course3)){$course3="";}
if(!isset($pTime)){$pTime="";}
if(!isset($gear)){$gear="";}
if(!isset($text)){$text="";}

if(isset($_FILES["photo"])){
	require("require/upload/upload.php");
}
$mountain_arr = ["選択してください", "-北海道", "大雪山", "-青森県", "岩木山", "-岩手県", "岩手山", "-宮城県", "屏風岳", "-山形県", "鳥海山", "-福島県", "燧ケ岳", "-栃木県", "日光白根山", "-東京都", "雲取山", "高尾山", "-神奈川県", "蛭ヶ岳", "-富山県", "立山", "-石川県", "白山", "-山梨県", "富士山", "-長野県", "奥穂高岳", "北穂高岳", "-静岡県", "富士山", "-三重県", "大台ケ原山", "-滋賀県", "伊吹山", "-大阪府", "大和桂山", "-兵庫県", "氷ノ山", "六甲山", "-奈良県", "八経ヶ岳", "-鳥取県", "大山", "-徳島県", "剣山", "-愛媛県", "石鎚山", "-大分県", "久重山", "-宮崎県", "祖母山", "-鹿児島県", "宮之浦岳"];
?>
	<main>
		<div class="innerForm">
			<form method="post" name="post" action="post_editResult.php" enctype="multipart/form-data">
				<label >
					<p class="formLabel mg-t50"><span id="post_label1">タイトル&nbsp;</span><span id="post_count1" class="font_min">0</span><span class="font_min">/30&nbsp;</span><span class="indispens">必須</span></p>
					<input type="text" name="title" value="<?php echo $title;?>" id="postTitle" class="formBox">
				</label>
				<label>
					<div class="post_rel">
						<p class="formLabel mg-t50"><span id="post_labelP">画像&nbsp;</span><span class="indispens">必須</span></p>
						<div class="post_fileBtn"><span><input type="file" name="photo" id="photo" class="formPhoto"></span></div>
						<p class="post_fileBtn_text"><i class="far fa-image"></i>ファイルを選択</p>
						<p><img src="<?php echo $photo;?>" id="preview" class="mg-t10"></p>
					</div>
				</label>
				<label>
					<p class="formLabel mg-t50"><span id="post_label2">山名&nbsp;</span><span class="indispens">必須</span></p>
					<select name="mountain" id="postMountain" class="formBox formSelect">
						<?php 
						foreach($mountain_arr as $mt){
							if(substr($mt,0,1)=='-'){
								echo "</optgroup>";
								echo "<optgroup label='{$mt}'>";
							}else{
								echo "<option value='$mt'";
								if($mountain==$mt){echo "selected";}
								echo ">{$mt}</option>";
							}
						}
						?>
						</optgroup>
					</select>
				</label>
				<label>
					<p class="formLabel mg-t50"><span id="post_label3">入山日</span></p>
					<input type="date" name="entryDate" value="<?php echo $entryDate;?>" id="postEntryDate" class="formBox wt200">
				</label>
				<label>
					<p class="formLabel mg-t10"><span id="post_label4">下山日</span></p>
					<input type="date" name="descentDate" value="<?php echo $descentDate;?>" id="postDescentDate" class="formBox wt200">
				</label>
				<label>
					<p class="formLabel mg-t50"><span id="post_label5">天候&nbsp;</span><span id="post_count5" class="font_min">0</span><span class="font_min">/30</span></p>
					<input type="text" name="weather" value="<?php echo $weather;?>" id="postWeather" class="formBox wt200">
				</label>
				<label>
					<p class="formLabel mg-t50"><span id="post_label6">コース1&nbsp;</span><span id="post_count6" class="font_min">0</span><span class="font_min">/100</span></p>
					<input type="text" name="course1" value="<?php echo $course1;?>"  id="postCourse1" class="formBox">
				</label>
				<label>
					<p class="formLabel mg-t50"><span id="post_label7">コース2&nbsp;</span><span id="post_count7" class="font_min">0</span><span class="font_min">/100</span></p>
					<input type="text" name="course2" value="<?php echo $course2;?>" id="postCourse2" class="formBox">
				</label>
				<label>
					<p class="formLabel mg-t50"><span id="post_label8">コース3&nbsp;</span><span id="post_count8" class="font_min">0</span><span class="font_min">/100</span></p>
					<input type="text" name="course3" value="<?php echo $course3;?>" id="postCourse3" class="formBox">
				</label>
				<label>
					<p class="formLabel mg-t50"><span id="post_label9">タイム&nbsp;</span><span id="post_count9" class="font_min">0</span><span class="font_min">/50</span></p>
					<input type="text" name="time" value="<?php echo $pTime;?>" id="postTime" class="formBox wt200">
				</label>
				<label>
					<p class="formLabel mg-t50"><span id="post_label10">装備&nbsp;</span><span id="post_count10" class="font_min">0</span><span class="font_min">/300</span></p>
					<textarea name="gear" rows="5" cols="43" id="postGear" class="formBox"><?php echo $gear;?></textarea>
				</label>
				<label>
					<p class="formLabel mg-t50"><span id="post_label11">テキスト&nbsp;</span><span id="post_count11" class="font_min">0</span><span class="font_min">/1000&nbsp;</span><span class="indispens">必須</span></p>
					<textarea name="text" rows="20" cols="43" id="postText" class="formBox"><?php echo $text;?></textarea>
				</label>
				<input type="hidden" name="post_id" value="<?php echo $post_id;?>">
				<input type="hidden" name="post_photo" value="<?php echo $photo;?>">
				<div class="mg-t10 al_right">
					<input type="submit" name="post" value="変更" class="postSubmit btn blue opa">
				</div>
				<p id="post_errMessage" class="al_right mg-t20"></p>
			</form>
			<form method="post" name="post" action="post_editDelete.php">
				<div class="al_center mg-t50">
					<input type="hidden" name="delete_post_id" value="<?php echo $edit_post_id;?>">
					<input type="submit" name="delete" value="記事を削除" class="postSubmit btn orenge opa">
				</div>
			</form>
		</div><!--/#innerForm-->
	</main>
<?php require("footer.php");?>