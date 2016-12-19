<?php 
require_once "jssdk.php";
// appId  和 秘钥
$jssdk = new JSSDK("wx6a53808c16c3eed1", "63f7d5cee917f3d9d9a35613cfee91fd");
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>爱鲜蜂</title>
	<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
	<meta name = "viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
	<link rel="stylesheet" type="text/css" href="home.css">
	<script data-main = "main.js" type="text/javascript" src = "js/require.js"></script>
	<script type="text/javascript" src="js/baiduTemplate.js"></script>
</head>
<body>
	<div class="home"></div>
	<div class = "market"></div>	
	<div class = "cart"></div>
	<div class = "mine"></div>
	<footer>
		<div class="footer f1"><a href="#home">首页</a></div>
		<div class="footer f2"><a href="#market">闪送超市</a></div>
		<div class="footer f3"><a href="#cart">购物车</a></div>
		<div class="footer f4"><a href="#mine">我的</a></div>
	</footer>
</body>
<script type="text/javascript">
	document.documentElement.style.fontSize=innerWidth/10+"px";
	window.onresize=function(){
		document.documentElement.style.fontSize=innerWidth/10+"px";
	}
</script>
<script type="text/javascript">
 wx.config({
    debug: true,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: '<?php echo $signPackage["timestamp"];?>',
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
     jsApiList: [
        'checkJsApi',
        'onMenuShareWeibo',
        'onMenuShareQZone',
        'hideMenuItems',
        'showMenuItems',
        'hideAllNonBaseMenuItem',
        'showAllNonBaseMenuItem',
        'translateVoice',
        'startRecord',
        'stopRecord',
        'onVoiceRecordEnd',
        'playVoice',
        'onVoicePlayEnd',
        'pauseVoice',
        'stopVoice',
        'uploadVoice',
        'downloadVoice',
        'chooseImage',
        'previewImage',
        'uploadImage',
        'downloadImage',
        'getNetworkType',
        'openLocation',
        'getLocation',
        'hideOptionMenu',
        'showOptionMenu',
        'closeWindow',
        'scanQRCode',
        'chooseWXPay',
        'openProductSpecificView',
        'addCard',
        'chooseCard',
        'openCard'
      ]
  });
</script>
</html>