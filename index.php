<?php include_once 'header.php';?>

<?php include_once 'public/mydb.php';?>
<?php
	$mydb = new MyDB();
	$newestResult = $mydb->query("select * from my_posts limit 0,10");

	$likestResult = $mydb->query("select * from my_posts order by likes_count");

	//$value 是“my_posts”表的一行的值
	function blockout($value){
		echo "<div class='subBlock'><div class='subBlockTitle'><a href='article.php?id={$value['ID']}&title={$value['post_title']}&author={$value['post_author']}&tags={$value['post_tags']}&counts={$value['contents_count']}&lcounts={$value['likes_count']}&dcounts={$value['dislikes_count']}' target='_blank'>{$value['post_title']} BY {$value['post_author']}</a></div><div class='subBlockTags'>{$value['post_tags']}</div><div class='subBlockSummary'><b>文案：</b>{$value['post_summary']}</div></div>"; 
	}
?>

<div id="block1">
	<div class="block-header">最新入站</div>

	<?php
	while($value = mysql_fetch_array($newestResult,MYSQL_ASSOC)) {
		blockout($value);
	}
	?>
</div>
<div class="clear marginTop40">&nbsp;</div>
<div id="block2">
	<div class="block-header">顶一下排行</div>

	<?php
	while($value = mysql_fetch_array($likestResult,MYSQL_ASSOC)) {
		blockout($value);
	}
	?>
</div>

<?php include_once 'bottom.php';?>