define(["backbone"], function(Backbone){
	var Router = Backbone.Router.extend({
		routes:{
			//键home表示a标签链接地址，值“home”是下面的的function
			home: "home",
			market: "market",
			cart: "cart",
			mine: "mine",
			//默认显示主页
			"":"home"
		},
		home: function(){
			require(["modules/home/home.js"],function(home){
				home.init();
			});
		},
		market: function(){
			require(["modules/market/market.js"],function(market){
				market.init();
			});
		},
		cart: function(){
			require(["modules/cart/cart.js"],function(cart){
				cart.init();
			});
		},
		mine: function(){
			require(["modules/mine/mine.js"],function(mine){
				mine.init();
			});
		},
	});
	return new Router();
});