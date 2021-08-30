<?php
class mtPost{
    private $post_id;
    private $post_date;
    private $photo;
	private $user_id;
    private $title;
    private $mountain;
    private $entryDate;
    private $descentDate;
	private $weather;
	private $course1;
	private $course2;
	private $course3;
	private $pTime;
	private $gear;
    private $text;
    private $user_name;
	private $user_img;
	private $profile;
	private $elevation;
	private $place;
	private $mt_range;
	

	//コンストラクタ
    public function __construct($post_id, $post_date, $photo, $user_id, $title, $mountain, $entryDate, $descentDate, $weather, $course1, $course2, $course3, $pTime, $gear, $text, $user_name, $user_img, $profile, $elevation, $place, $mt_range){
        $this->post_id = $post_id;
        $this->post_date = $post_date;
        $this->photo = $photo;
		$this->user_id = $user_id;
        $this->title = $title;
        $this->mountain = $mountain;
        $this->entryDate = $entryDate;
        $this->descentDate = $descentDate;
        $this->weather = $weather;
        $this->course1 = $course1;
        $this->course2 = $course2;
        $this->course3 = $course3;
        $this->pTime = $pTime;
        $this->gear = $gear;
        $this->text = $text;
        $this->user_name = $user_name;
		$this->user_img = $user_img;
		$this->profile = $profile;
        $this->elevation = $elevation;
        $this->place = $place;
        $this->mt_range = $mt_range;
    }

    //プロパティに値を代入する
    public function setData($post_id, $post_date, $photo, $user_id, $title, $mountain, $entryDate, $descentDate, $weather, $course1, $course2, $course3, $pTime, $gear, $text, $user_name, $user_img, $profile, $elevation, $place, $mt_range){
        $this->post_id = $post_id;
        $this->post_date = $post_date;
        $this->photo = $photo;
		$this->user_id = $user_id;
        $this->title = $title;
        $this->mountain = $mountain;
        $this->entryDate = $entryDate;
        $this->descentDate = $descentDate;
        $this->weather = $weather;
        $this->course1 = $course1;
        $this->course2 = $course2;
        $this->course3 = $course3;
        $this->pTime = $pTime;
        $this->gear = $gear;
        $this->text = $text;
        $this->user_name = $user_name;
		$this->user_img = $user_img;
		$this->profile = $profile;
        $this->elevation = $elevation;
        $this->place = $place;
        $this->mt_range = $mt_range;
    }

    //プロパティデータの表示
    public function printData(){
        echo "<tr>";
        echo "<td>".$this->post_id."</td>";
        echo "<td>".$this->post_date."</td>";
        echo "<td>".$this->photo."</td>";
		echo "<td>".$this->user_id."</td>";
        echo "<td>".$this->title."</td>";
        echo "<td>".$this->mountain."</td>";
        echo "<td>".$this->entryDate."</td>";
        echo "<td>".$this->descentDate."</td>";
        echo "<td>".$this->weather."</td>";
        echo "<td>".$this->course1."</td>";
        echo "<td>".$this->course2."</td>";
        echo "<td>".$this->course3."</td>";
        echo "<td>".$this->pTime."</td>";
        echo "<td>".$this->gear."</td>";
        echo "<td>".$this->text."</td>";
    }
	
	//indexカード表示
    public function cardData(){
        echo '<form method="get" name="form'.$this->post_id.'" action="article.php" class="cL_subject_form card">';
		echo 	'<a href="javascript:form'.$this->post_id.'.submit()" class="cL_subject">';
		echo 		'<p class="cL_subject_img"><img src="'.$this->photo.'"></p>';
		echo 		'<h3>'.$this->title.'</h3>';
		echo 		'<p class="cL_subject_text text_limit">'.$this->text.'</p>';
		echo 		'<div class="cL_subject_account">';
		echo 			'<p><img src="'.$this->user_img.'" alt=""></p>';
		echo 			'<div class="cL_subject_account_text">';
		echo 				'<p>'.$this->user_name.'</p>';
		echo 				'<p><time>'.mb_substr($this->post_date, 0, 10).'</time></p>';
		echo 			'</div><!--/.cL_subject_account_text-->';
        echo 		'</div><!--/.cL_subject_account-->';
        echo    	'<input type="hidden" name="post_id" value="'.$this->post_id.'">';
        echo 	'</a><!--/.cL_subject card-->';
        echo '</form>';
    }
	
	//myPageカード表示
	public function cardData_mp(){
        echo '<form method="get" name="form'.$this->post_id.'" action="article.php" class="c_subject_form card">';
		echo 	'<a href="javascript:form'.$this->post_id.'.submit()" class="c_subject">';
		echo 		'<p class="c_subject_img"><img src="'.$this->photo.'"></p>';
		echo 		'<h3>'.$this->title.'</h3>';
		echo 		'<p class="c_subject_text text_limit">'.$this->text.'</p>';
		echo 		'<p><time>'.$this->post_date.'</time></p>';
        echo    	'<input type="hidden" name="post_id" value="'.$this->post_id.'">';
        echo 	'</a><!--/.c_subject-->';
        echo '</form>';
    }
	
	//管理ページ用
    public function ad_printData(){
        echo "<tr>";
        echo "<td>".$this->post_date."</td>";
		echo "<td class='accountImg'><img src='".$this->photo."'></td>";
        echo "<td>".$this->user_id."</td>";
        echo "<td>".$this->title."</td>";
        echo "<td>".$this->mountain."</td>";
		echo "<td>".$this->entryDate."</td>";
		echo "<td>".$this->descentDate."</td>";
		echo "<td>".$this->course1."</td>";
		echo "<td>".$this->course2."</td>";
		echo "<td>".$this->course3."</td>";
		echo "<td>".$this->pTime."</td>";
		echo "<td>".$this->gear."</td>";
		echo "<td>".$this->text."</td>";
		echo "<form method='post' action='admin_post_edit.php'>";
		echo "<td><input type='hidden' name='post_id' value='".$this->post_id."'><input type='submit' name='btn' value='編集' class='btn yellow opa'></td>";
		echo "</form>";
    }

    public function ad_printDataEdit(){
        $mountain_arr = ["選択してください", "-北海道", "大雪山", "-青森県", "岩木山", "-岩手県", "岩手山", "-宮城県", "屏風岳", "-山形県", "鳥海山", "-福島県", "燧ケ岳", "-栃木県", "日光白根山", "-東京都", "雲取山", "高尾山", "-神奈川県", "蛭ヶ岳", "-富山県", "立山", "-石川県", "白山", "-山梨県", "富士山", "-長野県", "奥穂高岳", "北穂高岳", "-静岡県", "富士山", "-三重県", "大台ケ原山", "-滋賀県", "伊吹山", "-大阪府", "大和桂山", "-兵庫県", "氷ノ山", "六甲山", "-奈良県", "八経ヶ岳", "-鳥取県", "大山", "-徳島県", "剣山", "-愛媛県", "石鎚山", "-大分県", "久重山", "-宮崎県", "祖母山", "-鹿児島県", "宮之浦岳"];
		echo "<input type='hidden' name='post_id' value='".$this->post_id."'>";
		echo "<p>タイトル</p>";
        echo "<input type='text' name='title' value='".$this->title."' class='formBox wt400'>";
		echo "<p class='mg-t20'>画像</p>";
        echo "<input type='file' name='photo' id='photo' class='formPhoto'>";
        echo "<p><img src='".$this->photo."' id='preview' class='mg-t10'></p>";
        echo "<p class='mg-t20'>山名</p>";
        echo "<select name='mountain' id='postMountain' class='formBox formSelect wt200'>";
        foreach($mountain_arr as $mt){
            if(substr($mt,0,1)=='-'){
                echo "</optgroup>";
                echo "<optgroup label='{$mt}'>";
            }else{
                echo "<option value='$mt'";
                if($this->mountain==$mt){echo "selected";}
                echo ">{$mt}</option>";
            }
        }
        echo "</optgroup>";
        echo "</select>";
		echo "<p class='mg-t20'>入山日</p>";
        echo "<input type='date' name='entryDate' value='".$this->entryDate."' class='formBox wt200'>";
        echo "<p class='mg-t20'>下山日</p>";
		echo "<input type='date' name='descentDate' value='".$this->descentDate."' class='formBox wt200'>";
        echo "<p class='mg-t20'>天候</p>";
		echo "<input type='text' name='weather' value='".$this->weather."' class='formBox wt200'>";
        echo "<p class='mg-t20'>コース1</p>";
		echo "<input type='text' name='course1' value='".$this->course1."' class='formBox'>";
        echo "<p class='mg-t20'>コース2</p>";
		echo "<input type='text' name='course2' value='".$this->course2."' class='formBox'>";
        echo "<p class='mg-t20'>コース3</p>";
		echo "<input type='text' name='course3' value='".$this->course3."' class='formBox'>";
        echo "<p class='mg-t20'>タイム</p>";
		echo "<input type='text' name='time' value='".$this->pTime."' class='formBox wt200'>";
        echo "<p class='mg-t20'>装備</p>";
		echo "<textarea name='gear' rows='5' cols='43' id='postGear' class='formBox'>".$this->gear."</textarea>";
        echo "<p class='mg-t20'>テキスト</p>";
		echo "<textarea name='text' rows='20' cols='43' id='postText' class='formBox'>".$this->text."</textarea>";
    }
}