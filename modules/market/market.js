define(["text!./market.html", "$css!./market.css"], function(marketPage){
	return{
		init:function(){
			$(".market").html(marketPage).show().siblings("div").hide();
			$(".chao-list").on("click","#jia",function(){
				console.log(this)
			})
		}
	}
});