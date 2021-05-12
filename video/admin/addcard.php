<?php
error_reporting(0); 
define('a', '本程序由1号源码屋开发，官方网站：http://www.ymjiaoyi.com，源码唯一销售客服QQ号码：1427457402 ，请尊重开发者劳动成果，勿将本程序发布到网上或倒卖，感谢您的支持！');
if($_COOKIE[adminname]==null){
echo "<script>alert('管理身份已失效请重新登录!')</script><script>location.href='index.php'</script>";
exit;
}
include("../config/conn.php");
include("../config/common.php");
if($_POST[add]){
if($_POST[type]==null){
echo msglayer("请先设置会员类型！",3);
}elseif($_POST[terrace]==null){
echo msglayer("请先设置所属平台！",3);
}else{
function random($length, $chars) {
$hash = '';
$max = strlen($chars) - 1;
for($i = 0; $i < $length; $i++) {
$hash .= $chars[mt_rand(0, $max)];
}
return $hash;
}

$number=intval($_POST[number]); 
$time=time();
$terrace=intval($_POST[terrace]);
$type=intval($_POST[type]);
$ter_2=getone("select * from uboterrace WHERE small_id=".$terrace." and type=".$type);
if ($ter_2){
$serve=$ter_2[name];
$serve_id=$ter_2[id];
}
$ter_1=getone("select * from uboterrace WHERE id=".$terrace);
if ($ter_1){
$terrace=$ter_1[name];
$terrace_id=$ter_1[id];
}
$hy=getone("select * from ubozf WHERE id=1");
if ($hy)
{
$money1=$hy[money1];
$money2=$hy[money2];
$money3=$hy[money3];
$money4=$hy[money4];
}
if ($type==1){$money=$money1;}elseif ($type==2){$money=$money2;}elseif ($type===3){$money=$money3;}elseif ($type==4){$money=$money4;}
for($i=0;$i<=$number;$i++){
$user=random(10, '0123456789');
$pass=random(4, 'ABCDEFGHIJKLMNPQRSTUVWXYZ');
$type="(`id`, `user`, `pass`,`money`, `serve`, `serve_id`, `kstime`,`terrace`,`terrace_id`,`status`) VALUES (null,'$user','$pass','$money','$serve','$serve_id','$time','$terrace','$terrace_id','0')";
dbinsert(ubocard,$type);
}
echo msglayerurl("成功生成".$number."张，返回页面",5,"card.php");
}
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="gb2312">
<title>生成卡密</title>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" href="css/layui.css" media="all">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/style2.css">
<!--CSS引用-->
<link rel="stylesheet" href="css/peizhi.css">
<!--[if lt IE 9]>
<script src="js/html5shiv.min.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<SCRIPT language=javascript src="../app/layer/jquery-1.9.1.min.js"></SCRIPT>
<SCRIPT language=javascript src="../app/layer/layer.js"></SCRIPT>
<script language="javascript">
function checkdel()
{if (confirm("确实要删除吗？"))
     {return (true);}
     else
     {return (false);}
}
</script>
</head>
<body>
<div class="layui-layout layui-layout-admin">
<?php include_once('header.php'); ?> 
<?php include_once('left.php'); ?> 
<!--主体-->
<div class="layui-body">
<!--tab标签-->
<div class="layui-tab layui-tab-brief">
<ul class="layui-tab-title">
<li class="layui-this"><a href="javascript:history.go(-1);">生成卡密</a></li>
</ul>
<div class="layui-tab-content">
<div class="layui-tab-item layui-show">
<form action="" method="post" target="msgubotj">	
<table width="100%" class="layui-table" cellspacing="0" cellpadding="0">
<tbody>
<tr class="color2">
  <td width="100"><p align="left"><b>会员类型</b></p></td>
  <td height="38"><p><?php
$hy=getone("select * from ubozf WHERE id=1");
if ($hy)
{
$member1=$hy[member1];
$member2=$hy[member2];
$member3=$hy[member3];
$member4=$hy[member4];
} ?><select name="type" style="margin:0px">
<option value="1"><?php echo $member1;?></option>
<option value="2"><?php echo $member2;?></option>
<option value="3"><?php echo $member3;?></option>
<option value="4"><?php echo $member4;?></option>
</select></p></td>
</tr>
<tr class="color2">
  <td><p align="left"><b>所属平台</b></p></td>
  <td height="38"><p><select name="terrace" style="margin:0px">
<?php
$query = mysql_query("SELECT * FROM uboterrace where small_id=0 order by sort desc");
while($a = mysql_fetch_array($query)) {?>
<option value="<?php echo $a[id]?>" ><?php echo $a[name]?></option>
<?php }?>
</select></p></td>
</tr>
<tr class="color2">
  <td><p align="left"><b>生成数量</b></p></td>
  <td height="38"><p><select name="number" style="margin:0px"><?php for ($x=1; $x<=10; $x++) {?><option value="<?php echo $x;?>0"><?php echo $x;?>0&nbsp;张</option><?php }?></select></p></td>
</tr>


</tbody>
</table>
<p>
<br><input type="submit" class="layui-btn" value="保存" id="btnPost"  name= "add"   >
</p>
</form>
</div>
</div>
</div>
</div>
<?php include_once('foot.php'); ?> 
</div>
</html>
