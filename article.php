<?php include_once 'header.php';?>

<script type="text/javascript" src="js/article.js"></script>
<input type="hidden" id="articleID" value="<?php echo $_REQUEST['id'];?>" />

<div class="articleTitle">
	<?php echo $_REQUEST['title']." BY ".$_REQUEST['author'];?>
</div>
<div class="articleTags">
	<?php echo $_REQUEST['tags'];?>
</div>
<div class="articleContent"></div>

<?php include_once 'bottom.php';?>