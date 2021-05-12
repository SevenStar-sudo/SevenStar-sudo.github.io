<?php
error_reporting(0); 
define('a', '本程序由1号源码屋开发，官方网站：http://www.ymjiaoyi.com，源码唯一销售客服QQ号码：1427457402 ，请尊重开发者劳动成果，勿将本程序发布到网上或倒卖，感谢您的支持！');
include("../include/os.php");
include("../config/common.php");
include("../config/conn.php");
$i=rand(1,40);
$cishu=rand(1,10000);
$time=time();
$hurl = $_SERVER['HTTP_REFERER'];//来源;
$wangzhi = $_SERVER['SERVER_NAME'];
$userid=$_COOKIE[uid];
if($userid==null){
echo "<script>location.href='login.php'</script>";
exit;
}
$agent = $_SERVER['HTTP_USER_AGENT'];
if(strpos($agent,"NetFront") || strpos($agent,"iPhone") || strpos($agent,"MIDP-2.0") || strpos($agent,"Opera Mini") || strpos($agent,"UCWEB") || strpos($agent,"Android") || strpos($agent,"Windows CE") || strpos($agent,"SymbianOS"))
{
$terrace=intval($_REQUEST[terrace]);
$types=intval($_REQUEST[type]);
$pid=$_REQUEST[pid];
$user=$_POST[user];
$password=$_POST[password];
$add=$_POST[add];
if($add && $pid>0 && $types>0){
if($user==null){
echo msglayer("请输入卡号！",8);
}elseif($password==null){
echo msglayer("请输入密码！",8);
}else{
if ($user && $password)
{
$activate=getone("select * from ubocard WHERE user='".$user."' and pass='".$password."'");
if ($activate)
{
$id=$activate[id];
$status=$activate[status];
$hylx=$types;
if ($status==0){
$info=getone("select * from ubouser WHERE userid='$userid'");
$uid=$info['id'];
$oldendtime=$info['endtime'];
$mgr=$info['user'];
$hy=getone("select * from ubozf WHERE id=1");
$member1=$hy[member1];
$member2=$hy[member2];
$member3=$hy[member3];
$member4=$hy[member4];
$hytime1=$hy[hytime1];
$hytime2=$hy[hytime2];
$hytime3=$hy[hytime3];
$hytime4=$hy[hytime4];
if ($hylx==1){echo $hymc=$member1;$days=$hytime1;}elseif ($hylx==2){echo $hymc=$member2;$days=$hytime2;}elseif ($hylx==3){echo $hymc=$member3;$days=$hytime3;}elseif ($hylx==4){echo $hymc=$member4;$days=$hytime4;}
if ($oldendtime<$time)
{$oldendtime=0;}
$endtime=strtotime("".intval($days)." days",$oldendtime==0?time():$oldendtime);
$endtimexx=date("Y-m-d",strtotime($yxqx." day"))." 23:59:59";
$endtimexx=strtotime($endtime);
$type="hylx='$hylx',hymc='$hymc',kstime='$time',endtime='$endtime' where id='$uid'";
upalldt(ubouser,$type);
$ddzt=2;
$type="ddzt='$ddzt',remind='1'  where pid='$pid'";
upalldt(ubotj,$type);
$type="status='1',endtime='$time',mgr='$mgr' where id='$id'";
upalldt(ubocard,$type);
echo msglayerurl("激活成功！",8,"/user/");
exit;
}else{
echo msglayer("卡密已使用！",8);
exit;
}
}else{
echo msglayer("卡密错误！",8);
exit;
}
}
}
}
if ($terrace>0 && $types>0 && $pid>0){
$ter=getone("select * from uboterrace WHERE small_id=".$terrace." and type=".$types);
if ($ter)
{
$url=$ter[link];
$name=$ter[name];
$ddzt=1;
$type="ddzt='$ddzt' where pid='$pid'";
upalldt(ubotj,$type);
}else{
echo "<script>alert('请选择平台及套餐!');location.href='user_pay.php'</script>";
exit;
}
}
?>
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
<title>卡密平台支付</title>
<meta http-equiv='Content-Type' content='text/html; charset=gb2312' />
<meta http-equiv="x-dns-prefetch-control" content="on"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta content="telephone=no" name="format-detection"/>
<meta name="full-screen" content="yes"/>
<meta name="x5-fullscreen" content="true"/>
<style type="text/css">
<!--
body {
	font-family:Helvetica Neue,Helvetica,Microsoft Yahei,Arial,sans-serif;
	background-color:rgba(242,237,230,1);
	font-size:.8rem;
	max-width: 480px;
	min-width: 320px;
	margin:0 auto;
}
	div#load-more {
    max-width: 640px;
    min-width: 320px;
    position: relative;
    width: 100%;
    margin: 0px auto;}
	.buy-wrapper {
  position:fixed;
  max-width: 480px;
  min-width: 320px;
  bottom:0;
  margin:0 auto;
  width:100%;
  height:50px;
  padding:;
  line-height:50px;
  box-shadow:0 0 5px 0 rgba(218, 218, 218, 0.75);
  background-color:#d64f4f;
  color:#FFFFFF;
  font-size: 12px;
  overflow:hidden;
  z-index:100;
}
.user{width:46%; height:50px; overflow:hidden; float:left; padding-left:1%;}
.user .u1{display:block; float:left; width:26%;height:50px;text-align:center;}
.user .u2{display:block; float:left; width:74%;height:28px; line-height:28px;margin-top:11px;overflow:hidden;}
.password .p1{display:block; float:left; width:40%;height:50px; text-align:center;}
.password .p2{display:block; float:left; width:60%;height:28px; line-height:28px;margin-top:11px;overflow:hidden; }
.password{width:29%; height:50px; overflow:hidden; float:left;margin-left:2%;}
.post{width:20%; height:50px; overflow:hidden; float:left; margin-left:1%;}
.post span{ display:block;width:80%;height:28px; margin:0 auto;margin-top:11px; overflow:hidden;}
.post input{ width:100%;font-size: 14px; line-height:28px;font-weight: 400;display: inline-block;margin-bottom: 0;padding: 0px;cursor: pointer;transition: all;transition-timing-function: linear;transition-duration: .2s;text-align: center;vertical-align: top;white-space: nowrap;background-clip: padding-box;color: #fff;border: 0px solid #F86363;background-color: #F86363;font-family:Helvetica Neue,Helvetica,Microsoft Yahei,Arial,sans-serif;}

.user input,.password input{ width:96%;line-height: 26px;height:26px;-webkit-user-select: text;border: 1px solid rgba(0, 0, 0, .2);border-right: 0px;border-radius: 0px;outline: 0;background-color: #fff;-webkit-appearance: none;font-size: 14px;-webkit-tap-highlight-color: transparent;color:#000;background-color:#f8f8f8;resize:none; float:left; padding:0 2%; text-align:center;}

-->
</style>
<SCRIPT language=javascript src="/js/jquery.min.js"></SCRIPT>
<SCRIPT language=javascript src="/app/layer/layer.js"></SCRIPT>
</head>
<body>
<div id="load-more">
<div>
<iframe id="quaniframe" name="quaniframe" scrolling="auto" src="<?php echo $url;?>" frameborder="0" style="padding: 0px; width: 100%;overflow-x:hidden;"  leftmargin="0" topmargin="0"></iframe>
<div class="buy-wrapper">
<form action="" method="post" name="kami" id="kami" target="msgubotj">
<div class="user"><span class="u1">卡号：</span><span class="u2"><input name="user" type="text" id="user"></span>
</div><div class="password"><span class="p1">密码：</span><span class="p2"><input name="password" type="text" id="password"></span></div><div class="post"><span><input name="pid" type="hidden" value="<?php echo $pid;?>"><input name="type" type="hidden" value="<?php echo $types;?>"><input type="submit" id="jihuo" value="激活" name= "add"></span>
</div>
</form></div>
<div style="width: 100%;max-width: 480px;min-width: 320px;position:fixed;top:0;margin:0 auto;background-color: #d64f4f;text-align: center;line-height: 46px;color: #fff;font-size: 16px;font-weight: normal;"><?php echo $name;?><a href="user_pay.php" style="text-decoration:none;position:absolute;left:0px;top:0;margin-left: 10px;text-align: center;line-height: 46px;color: #fff;font-size: 16px;font-weight: normal;"><strong>＜&nbsp;</strong>返回</a></div>
</div>
<div style="display:none"><iframe id="msgubotj" name="msgubotj" width=0 height=0></iframe></div> 
<script type="text/javascript">$("#quaniframe").attr("height",window.screen.height);</script>
</body>
</html>
<?php
}
else
{
echo "<script>alert('请使用手机端打开!');location.href='user_pay.php'</script>";
exit;
}
?>