<?php
$login_arry = new ArrayObject ();

$sql = "select * from user";
foreach($dbInfo->query($sql) as $record){
	$regist_date = $record["regist_date"];
	$user_id = $record["user_id"];
	$user_name = $record["user_name"];
	$email = $record["email"];
	$pass = $record["password"];
	$value = new mtUser($regist_date, $user_id, $user_name, $email, $pass);
	$login_arry->append($value);
}
echo "<h4>データベースの表示</h4>";
	echo "<table border='1'>";
	echo "<thead align='center'>";
	echo "<tr><td>date</td><td>id</td><td>name</td><td>email</td><td>pass</td><tr>";
	echo "</thead>";
	echo "<tbody>";
	foreach ( $login_arry as $value ) {
		$value->printData ();
	}
	echo "<tbody>";
	echo "</table>";

foreach ( $login_arry as $value ) {


// データベースの切断
$dbInfo = null;