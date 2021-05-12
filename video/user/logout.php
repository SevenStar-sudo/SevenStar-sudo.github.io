<?php
error_reporting(0); 
define('a', '本程序由1号源码屋开发，官方网站：http://www.ymjiaoyi.com，源码唯一销售客服QQ号码：1427457402 ，请尊重开发者劳动成果，勿将本程序发布到网上或倒卖，感谢您的支持！');
include("../config/conn.php");
include("../config/common.php");
$out= $_GET[out];
switch($out){
case 'out':
setcookie("userid", $_COOKIE[userid],time()-7300);
echo msglayerurl("会员退出成功！",8,"login.php");
exit;
}
?>
