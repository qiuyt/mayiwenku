<?php
$articleID = $_POST['articleID'];
$sectionID = $_POST['sectionID'];

include_once '../public/mydb.php';
$mydb = new MyDB();
$result = $mydb->query("select post_content from my_contents where post_ID={$articleID} and post_chapter={$sectionID}");
$result = mysql_fetch_array($result,MYSQL_ASSOC);

echo json_encode(preg_replace("/\n/","<br />",$result['post_content']));
?>