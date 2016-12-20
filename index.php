<?require_once "jssdk.php";
// appId  和 秘钥
$jssdk = new JSSDK("wx6a53808c16c3eed1", "63f7d5cee917f3d9d9a35613cfee91fd");
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>aixianfeng</title>
	<meta name = "viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
	<link rel="stylesheet" type="text/css" href="home.css">
	<script type="text/javascript" src="js/baiduTemplate.js"></script>
    <script data-main = "main.js" type="text/javascript" src = "js/require.js"></script>
</head>
<body>
	<!-- <div class="home"></div>
	<div class = "market"></div>	
	<div class = "cart"></div>
	<div class = "mine"></div>
	<footer>
		<div class="footer f1"><a href="#home">首页</a></div>
		<div class="footer f2"><a href="#market">闪送超市</a></div>
		<div class="footer f3"><a href="#cart">购物车</a></div>
		<div class="footer f4"><a href="#mine">我的</a></div>
	</footer> -->
    <input type="button" value="获取位置" id="btn">
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
 document.getElementById("btn").onclick = function(){
     wx.getLocation({
         success: function (res) {
             var latitude = res.latitude; // 纬度，浮点数，范围为90 ~ -90
             var longitude = res.longitude; // 经度，浮点数，范围为180 ~ -180。
             var speed = res.speed; // 速度，以米/每秒计
             var accuracy = res.accuracy; // 位置精度
            alert("经度，"+longitude+"维度，"+latitude)
         },
         cancel: function (res) {
             alert('用户拒绝授权获取地理位置');
         }
     });
 }
     
</script>
</html>