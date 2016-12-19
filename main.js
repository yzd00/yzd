require.config({  //config一般配置信息
	paths:{
		//默认js文件，可以省略js文件后缀
		//中括号里面有多项的话，优先级逐渐降低，没有文件的话就往后面读取。
		"jquery":["./js/jquery-1.11.2","./js/jquery-1.11.1"],
		"backbone": "./js/backbone",
		"text":"./js/text",
		"underscore": "js/underscore",
 	 	"$css": "./js/css"
	}
	// shim:{
	// 	deps:["jquery"]
	// }
})
require(['jquery','backbone','router.js'],function($,Backbone){
    Backbone.history.start();
});
// require(['jquery',"text!modules/home/home.html","$css!modules/home/home.css"],function($, homePage){
// 	//默认显示主页
// 	$(".home").html(homePage);
// });
// require(['jquery','jquery.jj']);