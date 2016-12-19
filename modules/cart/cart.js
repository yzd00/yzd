define(["text!./cart.html", "$css!./cart.css"], function(marketPage){
	return{
		init:function(){
			$(".cart").html(marketPage).show().siblings("div").hide();
		}
	}
});
