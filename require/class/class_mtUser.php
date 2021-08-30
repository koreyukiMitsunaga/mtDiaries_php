<?php
class mtUser{
    private $regist_date;
    private $user_id;
    private $user_name;
    private $email;
    private $pass;
	private $profile;
	private $user_img;
    
    //コンストラクタ
    public function __construct($regist_date, $user_id, $user_name, $email, $pass, $profile, $user_img){
        $this->regist_date = $regist_date;
        $this->user_id = $user_id;
        $this->user_name = $user_name;
        $this->email = $email;
        $this->pass = $pass;
		$this->profile = $profile;
		$this->user_img = $user_img;
    }

    //プロパティに値を代入する
    public function setData($regist_date, $user_id, $user_name, $email, $pass, $profile, $user_img){
        $this->regist_date = $regist_date;
        $this->user_id = $user_id;
        $this->user_name = $user_name;
        $this->email = $email;
        $this->pass = $pass;
		$this->profile = $profile;
		$this->user_img = $user_img;
    }
	
    //プロパティデータの表示
    public function printData(){
        echo "<tr>";
        echo "<td>".$this->regist_date."</td>";
        echo "<td>".$this->user_id."</td>";
        echo "<td>".$this->user_name."</td>";
        echo "<td>".$this->email."</td>";
        echo "<td>".$this->pass."</td>";
		echo "<td>".$this->profile."</td>";
		echo "<td>".$this->user_img."</td>";
    }
	
	//管理ページ用表示
	public function ad_printData(){
        echo "<tr>";
        echo "<td>".$this->regist_date."</td>";
        echo "<td>".$this->user_id."</td>";
        echo "<td>".$this->user_name."</td>";
        echo "<td>".$this->email."</td>";
		echo "<td>".$this->profile."</td>";
		echo "<td class='accountImg'><img src='".$this->user_img."'></td>";
		echo "<form method='post' action='admin_user_edit.php'>";
		echo "<td><input type='hidden' name='user_id' value='".$this->user_id."'><input type='submit' name='btn' value='編集' class='btn yellow opa'></td>";
		echo "</form>";
    }
	
	public function ad_printDataEdit(){
		echo "<input type='hidden' name='user_id' value='".$this->user_id."'>";
		echo "<p>投稿時間</p>";
		echo "<input type='text' name='regist_date' value='".$this->regist_date."' class='formBox wt200'>";
		echo "<p class='mg-t20'>ユーザー名</p>";
		echo "<input type='text' name='user_name' value='".$this->user_name."' class='formBox wt200'>";
		echo "<p class='mg-t20'>email</p>";
		echo "<input type='text' name='email' value='".$this->email."' class='formBox wt200'>";
		echo "<p class='mg-t20'>プロフィール</p>";
		echo "<input type='text' name='profile' value='".$this->profile."' class='formBox'>";
		echo "<p class='mg-t20'>img</p>";
		echo "<input type='file' name='photo' value='".$this->user_img."' id='photo' class='formPhoto'></span></div>";
		echo "<p><img src='".$this->user_img."' id='preview' class='mg-t10'></p>";
    }
}