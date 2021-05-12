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
if($userid==null){
echo "<script>location.href='login.php'</script>";
exit;
}else{
$money=$_POST[money];
$lanmu=$_GET[type];
if (empty($money))
{$money=$_GET[money];}
$uid=$_POST[uid];
$pay=$_POST[pay];
if (empty($pay))
{$pay=$_GET[pay];}
$url=$_POST[url];
if (empty($url))
{$url=$_GET[url];}
$pid=$_POST[pid];
if (empty($pid))
{$pid=$_GET[pid];}
$qdfk=$_REQUEST[qdfk];
$hyzf="where id='1'";
$zf=queryall(se2zf,$hyzf);
$zhifu=$zf[zhifu];
$alipay=$zf[alipay];
$weixin=$zf[weixin];
function random($length, $chars) {
$hash = '';
$max = strlen($chars) - 1;
for($i = 0; $i < $length; $i++) {
$hash .= $chars[mt_rand(0, $max)];
}
return $hash;
}
if($pid && $qdfk==1)
{
$ddzt=1;
$type="ddzt='$ddzt',remind='1' where pid='$pid'";
upalldt(ubotj,$type);
if ($lanmu){
	switch ($lanmu){
	case '1':
 	$lmwj= 'play';
	break;
  	case '2':
	$lmwj= 'tvplay';
	break;
	case '3':
	$lmwj= 'movieplay';
	break;
	case '4':
	$lmwj= 'comicplay';
	break;
	case '5':
	$lmwj= 'images';
	break;
	case '6':
    $lmwj= 'entplay';
	break;
	case '7':
    $lmwj= 'mvplay';
	break;
	case '8':
    $lmwj= 'xcplay';
	break;
	}}
$urlis=substr_count($url,'gm.php');
if ($urlis==1){
$url=str_replace("plus/gm.php?id",$lmwj.".php?playid",$url."&ly=ubosk"); 
}else{$url="/user/";}
echo msglayerurl("申请成功待核实！",8,"$url");
exit;
}
if($uid && $money)
{
$pid=random(10, '0123456789');
$ddzt=0;
$leixing=5;
$time=time();
if ($pay==3)
{
$ddzt=1;
$url="https://item.taobao.com/item.htm?id=544532055305";
$type="(`id`, `pid`, `uid`, `money`, `leixing`, `ddzt`, `zffs`, `addtime`,`remind`) VALUES (null,'$pid','$uid','$money','$leixing','$ddzt','$pay','$time','1')"; 
dbinsert(ubotj,$type);
echo msglayerurl("正在跳转至淘宝网请稍后...",8,"$url");
exit;
}
else
{
$httpurl="?pid=$pid&pay=$pay&money=$money&url=$url";
$type="(`id`, `pid`, `uid`, `money`, `leixing`, `ddzt`, `zffs`, `addtime`,`remind`) VALUES (null,'$pid','$uid','$money','$leixing','$ddzt','$pay','$time','1')"; 
dbinsert(ubotj,$type);
echo msglayerurl("订单创建成功！",8,"$httpurl");
$httpurl="?pid=$pid&pay=$pay&money=$money&url=$url";
exit;
}
}
$type="where userid='$userid'";
$neirong=queryall(ubouser,$type);
?>
<!DOCTYPE html>
<html>
<head>
<title>会员中心-金币充值</title>
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
<span id="index"><i class="ico07"><img src="/img/logo.png" width="88px" class="h" /></i></span><i class="ico21">金币充值</i>
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
<h2 class="t2 l" style="padding-top:1.5%;color:red;"><img src="/img/ustb.png" width="12" height="12" style="margin-right:5px;">金币充值</h2>
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
<form id="Form1" method="post" action="<?php if($zhifu==5){echo "pay.php";}?>" style="padding:0 10px;" <?php if($zhifu<5){?>target="msgubotj"<?php }?>>
<table width="100%" border="0" cellpadding="5" cellspacing="5">
<tbody>
<?php if($money && $pay){?>
<tr>
<td  height="50" colspan="2" align="center"><strong><?php if($pay==1){echo "微信支付";}elseif ($pay==2){echo "支付宝支付";}?></strong></td>
</tr>
<tr>
  <td  height="15" colspan="2" align="center"><img id="ewm" width="149" height="149" src="<?php if($pay==1){echo "/".$weixin;}elseif ($pay==2){echo "/".$alipay;}?>"></td>
</tr>
<tr>
  <td  height="30" colspan="2" align="center" style="color:#FF0000;font-size:14px;">需要支付 <?php echo $money;?> 元 </td>
</tr>
<tr>
  <td  height="30" colspan="2" align="center" style="color:#FF0000;font-size:14px;">扫描二维码 / 长按图片保存后扫描支付
    <input name="qdfk" type="hidden" value="1"><input name="pid" type="hidden" value="<?php echo $pid?>"><input name="url" type="hidden" value="<?php echo $url;?>"></td>
</tr>
<tr>
<td  height="50" colspan="2" align="center" valign="middle"><input type="submit" id="submit" value="支付后确认" class="user_reg_but" style="width:120px;"></td>
</tr>
<?php }else{?>
<tr>
  <td  height="20" colspan="2" align="center" >&nbsp;</td>
  </tr>
<tr>
<td width="30%"  height="50" align="center" style="border-bottom:1px solid #F6F6F6;">金币数量：</td>
<td width="70%" height="50" style="border-bottom:1px solid #F6F6F6;"><input name="money" type="text" class="make_resume_input" id="money" value="1" style="margin-top:5px;" onkeyup='this.value=this.value.replace(/\D/gi,"")'></td>
</tr>
<tr>
  <td height="36" align="center" valign="middle" style="border-bottom:1px solid #F6F6F6;"><label>支付方式：</label></td>
  <td height="50" valign="middle" style="border-bottom:1px solid #F6F6F6;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
<?php if ($zhifu<5){?>
  <tr>
    <td height="30" style="display:none"><label><input name="pay" type="radio" value="3">
淘宝网支付</label></td>
  </tr>
    <tr>
      <td height="30"><label>
        <input name="pay" type="radio" value="1" checked>
微信支付</label></td>
  </tr>
    <tr>
      <td height="30"><label>
        <input type="radio" name="pay" value="2">
支付宝支付</label></td>
  </tr>
<?php }?>
 <?php if ($zhifu==5){?>
<tr>
  <td height="36" align="left" valign="middle" style="border-bottom:1px solid #F6F6F6;"><label><input name="type" type="radio" value="Wechatnative" checked>
    微信支付</label></td>
</tr>
<tr>
  <td height="36" align="left" valign="middle" style="border-bottom:1px solid #F6F6F6;"><label><input type="radio" name="type" value="Alipay" >
支付宝支付</label></td>
</tr>
<?php }?>
</table></td></tr>
<tr>
<td height="60" colspan="2" align="center" valign="middle"><input name="uid" type="hidden" value="<?php echo $neirong[id]?>"><input name="url" type="hidden" value="<?php echo $hurl;?>">
  <input type="submit" id="submit" value="确认充值" class="user_reg_but" style="width:120px;"></td>
</tr>
<?php }?>
</tbody></table>
</form>
</section>

<?php include_once('../include/foot.php'); ?> 
<?php include_once('user_bottom.php'); ?> 
</body>
</html>
<?php }?> 