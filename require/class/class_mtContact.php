<?php
class mtContact{
    private $c_date;
    private $c_name;
    private $c_email;
    private $c_kind;
    private $c_title;
	private $c_text;
    
    //コンストラクタ
    public function __construct($c_date, $c_name, $c_email, $c_kind, $c_title, $c_text){
        $this->c_date = $c_date;
        $this->c_name = $c_name;
        $this->c_email = $c_email;
        $this->c_kind = $c_kind;
		$this->c_title = $c_title;
		$this->c_text = $c_text;
    }

    //プロパティに値を代入する
    public function setData($c_date, $c_name, $c_email, $c_kind, $c_title, $c_text){
        $this->c_date = $c_date;
        $this->c_name = $c_name;
        $this->c_email = $c_email;
        $this->c_kind = $c_kind;
		$this->c_title = $c_title;
		$this->c_text = $c_text;
    }
		
	//管理ページ用表示
	public function ad_printData(){
        echo "<tr>";
        echo "<td>".$this->c_date."</td>";
        echo "<td>".$this->c_name."</td>";
        echo "<td>".$this->c_email."</td>";
        echo "<td>".$this->c_kind."</td>";
		echo "<td>".$this->c_title."</td>";
		echo "<td>".$this->c_text."</td>";
    }
}