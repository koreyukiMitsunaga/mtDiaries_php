<?php
$adContact_arry = new ArrayObject ();

//postテーブルから降順で表示
$sql = "select * from contact order by c_date desc";
foreach($dbInfo->query($sql) as $record){
	$c_date = $record["c_date"];
	$c_name = $record["c_name"];
	$c_email = $record["c_email"];
	$c_kind = $record["c_kind"];
	$c_title = $record["c_title"];
	$c_text = $record["c_text"];
	$value = new mtContact($c_date, $c_name, $c_email, $c_kind, $c_title, $c_text);
	$adContact_arry->append($value);
}

$dbInfo = null;