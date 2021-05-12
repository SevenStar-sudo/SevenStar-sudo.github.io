<?php
error_reporting(0); 
define('a', '本程序由1号源码屋开发，官方网站：http://www.ymjiaoyi.com，源码唯一销售客服QQ号码：1427457402 ，请尊重开发者劳动成果，勿将本程序发布到网上或倒卖，感谢您的支持！');
include("../config/conn.php");
include("../config/common.php");
$userid=$_COOKIE[uid];
$time=time();
if($userid==null){
echo "<script>location.href='login.php'</script>";
exit;
}
$hycs="where id='1'";
$hy=queryall(ubozf,$hycs);
$tx=$hy[tx];
$user=getone("select * from ubouser WHERE userid='".$userid."'");
$alipayname=$user[alipayname];
$alipay=$user[alipay];
$money=$user[money];
if (empty($alipayname) || empty($alipay))
{
echo msglayerurl("请设置收款账号！",8,"user_edit.php");
}
else
{
if ($money<$tx)
{echo msglayer("金额小于".$tx."元，无法提取！",8);}
else
{echo msglayer("该功能开发中！",8);}
}
exit;
?>