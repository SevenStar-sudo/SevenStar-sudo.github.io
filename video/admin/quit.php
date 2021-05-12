<?php
error_reporting(0); 
define('a', '本程序由1号源码屋开发，官方网站：http://www.ymjiaoyi.com，源码唯一销售客服QQ号码：1427457402 ，请尊重开发者劳动成果，勿将本程序发布到网上或倒卖，感谢您的支持！');
include("../config/conn.php");
include("../config/common.php");
if($_COOKIE[adminname]==null){
echo "<script>location.href='index.php'</script>";
exit;
}
$out= $_GET[out];
switch($out){
case 'out':
setcookie("adminname", $_COOKIE[adminname],time()-7300);
echo "<script>location.href='index.php'</script>";
}
?>
