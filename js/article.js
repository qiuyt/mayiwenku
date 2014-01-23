$(function(){
	var n = 'article' + $("#articleID").val();
	$.cookie(n, 1, { expires: 7, path: '/' });

	getContent();

	$(window).scroll(function(){
		if(document.body.scrollTop == document.body.scrollHeight - document.documentElement.clientHeight) {
			$.cookie(n, parseInt($.cookie(n),10) + 1, { expires: 7, path: '/' });
			getContent();
		}
	});
});

function getContent() {
	var n = 'article' + $("#articleID").val();
	var data = {
		articleID:$("#articleID").val(),
		sectionID:$.cookie(n)
	};
	$.ajax({type:"POST", url:"interface/getArticleSection.php", data:data, async:true, success:function(rsp){
		rsp = $.parseJSON(rsp);

		if (rsp != "") {
			var htmlstr = "<div id='page" + $.cookie(n) + "'><div class='chapterTitleDiv'>第<span>" + $.cookie(n) + "</span>章</div>" + rsp + "</div>";

			if ($(".articleContent").html() == "") {
				$(".articleContent").html(htmlstr);
			} else {
				$(".articleContent").append(htmlstr);
			}	
		}		
	}});
}