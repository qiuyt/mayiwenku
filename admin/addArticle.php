<?php
if($_POST){
	require_once "mydb.php";
	$mydb = new MyDB();
	$sql = "insert into my_posts (post_title,post_summary,post_author,post_tags,contents_count) values ('".$_POST["title"]."','".$_POST["summary"]."','".$_POST["author"]."','".$_POST["tags"]."',".$_POST["count"].")";
    $postid = $mydb->insert($sql);
    echo "插入的文章ID：".$postid;
}
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset=utf-8 />
	<title>添加文章</title>
</head>
<body>
    <h1>添加文章</h1>
    <form action="" method="post">
	    标题：<input type="text" name="title" style="width:600px;" /><br />
	    摘要：<textarea name="summary" style="width:600px;height:200px;"></textarea><br />
	    作者：<input type="text" name="author" style="width:600px;" /><br />
	    标签：<input type="text" name="tags" style="width:600px;" /><br />
	    章节数：<input type="text" name="count" style="width:585px;" /><br />
	    <input type="submit" value="submit" />
	    <input type="reset" value="reset" />
	</form>
</body>
</html>