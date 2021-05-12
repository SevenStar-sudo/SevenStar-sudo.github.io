<?php
error_reporting(0); 
define('a', '本程序由1号源码屋开发，官方网站：http://www.ymjiaoyi.com，源码唯一销售客服QQ号码：1427457402 ，请尊重开发者劳动成果，勿将本程序发布到网上或倒卖，感谢您的支持！');
include("../include/os.php");
include("../config/common.php");
include("../config/conn.php");
$i=rand(1,40);
$cishu=rand(1,10000);
$hurl = $_SERVER['HTTP_REFERER'];//来源;
$userid=$_COOKIE[uid];
$time=time();
if($userid==null){
echo "<script>location.href='login.php'</script>";
exit;
}
$user=$_POST[user];
$password=$_POST[password];
$add=$_POST[add];
function random($length, $chars) {
$hash = '';
$max = strlen($chars) - 1;
for($i = 0; $i < $length; $i++) {
$hash .= $chars[mt_rand(0, $max)];
}
return $hash;
}
if($add){
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
$money=$activate[money];
$serve_id=$activate[serve_id];
$types=getone("select * from uboterrace WHERE id='$serve_id'");
$hylx=$types['type'];
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
$pid=random(10, '0123456789');
$pay=3;
$type="(`id`, `pid`, `uid`, `money`, `leixing`, `ddzt`, `zffs`, `addtime`,`remind`) VALUES (null,'$pid','$uid','$money','$hylx','$ddzt','$pay','$time','1')"; 
dbinsert(ubotj,$type);
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
else
{
echo msglayer("卡密未写！",8);
exit;
}
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>会员中心-卡密激活</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
<meta name="format-detection" content="telephone=no">
<SCRIPT language=javascript src="/app/layer/jquery-1.9.1.min.js"></SCRIPT>
<SCRIPT language=javascript src="/app/layer/layer.js"></SCRIPT>
<?php include_once('../include/css.php'); ?> 
<style>
.open_vip{
background-color: lightcyan;;
}
.ui-border li i em{
font-size: 0.75rem;
}
.aboutpic li{
margin-top: 0.6rem
}
.aboutpic li i img{
width: 2.5rem;
height: 2.5rem;
}

.qx {color: #999;}

</style>
</head>
<body>
<div id="head" >
<div class="fixtop">
<span id="home"><a href="/" rel="external"><i class="ico08"><img src="/img/homepage.png" width="30px" /></i></a></span>
<span id="index"><i class="ico07"><img src="/img/logo.png" width="88px" class="h" /></i></span><i class="ico21">卡密激活</i>
<span id="find"><i class="ico08"><img src="/img/ss1.png" width="29px" /></i></span>
</div>
<?php include_once('../include/column.php'); ?>
<div id="nav" class="view currents out">
<div id="search-box">
<form method="get" action="/vod_list.php" data-ajax="false" id="search-form">
<div class="box-search">
<span class="icon-search icon"></span>
<input x-webkit-speech type="text"  placeholder="请输入视频关键字" autocomplete="off" value="" name="k" id="k"/>
</div>
<div class="search_submit"><button type="submit" >
<i class="ico01"></i>搜索
</button>
</div>
</form>
</div>
<?php include_once('../include/nav_s.php'); ?>
</div>
</div>
<header id="header" class="ui-header ui-header-positive ui-border-b" >
<h1><?php if($user[ms]=="黄金会员"){?>黄金会员<?php }elseif($user[ms]=="永久会员"){?>钻石会员<?php }?></h1>
</header>
<section class="jilu" style=" margin-top:46px;"> 
<a href="user_pay.php">
<li>
<h2 class="t2 l" style="padding-top:1.5%;"><img src="/img/ustb.png" width="12" height="12" style="margin-right:5px;">会员升级</h2>
<span class="r login_yj"> &gt; </span>
</li>
</a> 
<a href="user_gold.php">
<li>
<h2 class="t2 l" style="padding-top:1.5%;"><img src="/img/ustb.png" width="12" height="12" style="margin-right:5px;">金币充值</h2>
<span class="r login_yj"> &gt; </span>
</li>
</a>
<a href="jihuo.php">
<li>
<h2 class="t2 l" style="padding-top:1.5%;color:red;"><img src="/img/ustb.png" width="12" height="12" style="margin-right:5px;">卡密激活</h2>
<span class="r login_yj"> &gt; </span>
</li>
</a>  
<a href="user_pay_list.php">
<li>
<h2 class="t2 l" style="padding-top:1.5%;"><img src="/img/ustb.png" width="12" height="12" style="margin-right:5px;">财务记录</h2>
<span class="r login_yj"> &gt; </span>
</li>
</a> 
</section>
<div style="display:none"><iframe id="msgubotj" name="msgubotj" width=0 height=0></iframe></div> 
<section class="jilu" style="margin-top: 2.2%;"> 
<form id="Form1" method="post" action="" style="padding:0 10px;" target="msgubotj">
<table width="100%" border="0" cellpadding="5" cellspacing="5">
<tbody>
<tr>
  <td  height="20" colspan="2" align="center" >&nbsp;</td>
  </tr>
<tr>
<td width="30%"  height="50" align="center" style="border-bottom:1px solid #F6F6F6;">卡号：</td>
<td width="70%" valign="middle" height="50" style="border-bottom:1px solid #F6F6F6;"><input name="user" type="text" id="user" class="make_resume_input" style="margin-top:5px; width:100%;"></td>
</tr>
<tr>
  <td height="36" align="center" valign="middle" style="border-bottom:1px solid #F6F6F6;"><label>密码：</label></td>
  <td height="50" valign="middle" style="border-bottom:1px solid #F6F6F6;"><input name="password" type="text" id="password"  class="make_resume_input" style="margin-top:5px; margin-left:-12px;"></td></tr>
<tr>
<td height="60" colspan="2" align="center" valign="middle">
  <input type="submit" id="submit" value="确认激活" class="user_reg_but" style="width:120px;"  name= "add"></td>
</tr>
</tbody></table>
</form>
</section>

<?php include_once('../include/foot.php'); ?> 
<?php include_once('user_bottom.php'); ?> 
</body>
</html>