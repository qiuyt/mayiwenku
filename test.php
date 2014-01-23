<?php
	require_once "public/mydb.php";
	$mydb = new MyDB();
	$sql = "select * from my_contents";
    $result = mysql_query($sql,$mydb->db);
    $result = mysql_fetch_array($result,MYSQL_NUM);
    echo preg_replace("/\n/","<br />",$result[3]);

?>