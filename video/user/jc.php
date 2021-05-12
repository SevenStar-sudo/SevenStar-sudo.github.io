<?php
error_reporting(0); 
define('a', '本程序由1号源码屋开发，官方网站：http://www.ymjiaoyi.com，源码唯一销售客服QQ号码：1427457402 ，请尊重开发者劳动成果，勿将本程序发布到网上或倒卖，感谢您的支持！');
include("../config/conn.php");
include("../config/common.php");
$username=$_GET["username"];
$email=$_GET["email"];
if ($username || $email){ 
if ($username)
{
$user=getone("select * from ubouser WHERE user='".$username."'");
}
else
{
$user=getone("select * from ubouser WHERE email='".$email."'");
}
if(empty($user))
{
echo msglayer("可以注册！",8);
exit;
}
else
{
echo msglayer("已被占用！",8);
exit;
}
} 
?>