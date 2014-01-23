<?php
if($_POST){
	require_once "../public/mydb.php";
	$mydb = new MyDB();
	$sql = "insert into my_contents (post_ID,post_chapter,post_content) values (".$_POST["postid"].",".$_POST["chapterid"].",'".$_POST["content"]."')";
    $postid = $mydb->insert($sql);
    echo "插入的章节ID：".$postid;
}
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset=utf-8 />
	<title>添加章节</title>
</head>
<body>
    <h1>添加章节</h1>
    <form action="" method="post">
	    文章ID：<input type="text" name="postid" style="width:600px;" /><br />
	    章节ID：<input type="text" name="chapterid" style="width:600px;" /><br />
	    内容：<textarea name="content" style="width:100%;height:1000px;"></textarea><br />
	    <input type="submit" value="submit" />
	    <input type="reset" value="reset" />
	</form>
</body>
</html>