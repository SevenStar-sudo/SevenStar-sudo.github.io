<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `daxiu`;");
E_C("CREATE TABLE `daxiu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `hit` varchar(255) DEFAULT NULL,
  `diqu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=gbk ROW_FORMAT=DYNAMIC");
E_D("replace into `daxiu` values('1','daxiu/1.jpg','魅狐','http://www.wxrhjc.com/2.mp4','25','成都市');");
E_D("replace into `daxiu` values('2','daxiu/2.jpg','我爱台妹','http://www.wxrhjc.com/2.mp4','12','台湾省');");
E_D("replace into `daxiu` values('3','daxiu/3.jpg','小公举','http://localhost/sp/1.mp4','18','苏州市');");
E_D("replace into `daxiu` values('4','daxiu/4.jpg','演员王永峰','http://www.wxrhjc.com/2.mp4','29','酒泉市');");
E_D("replace into `daxiu` values('5','daxiu/5.jpg','EiWen','http://www.wxrhjc.com/2.mp4','30','商丘市');");
E_D("replace into `daxiu` values('6','daxiu/6.jpg','若曦 ','http://cdn.52papa.space/20170527/rc7wbFPw/mp4/rc7wbFPw.mp4','25','浙江省');");
E_D("replace into `daxiu` values('7','daxiu/7.jpg','猫啊瞄吖猫','http://www.wxrhjc.com/2.mp4','25','重庆市');");
E_D("replace into `daxiu` values('8','daxiu/8.jpg','桃君','http://www.wxrhjc.com/2.mp4','25','淄博市');");
E_D("replace into `daxiu` values('9','daxiu/9.jpg','小小酥','http://www.wxrhjc.com/2.mp4','25','上海市');");
E_D("replace into `daxiu` values('10','daxiu/10.jpg','六儿','http://www.wxrhjc.com/2.mp4','25','福州市');");

require("../../inc/footer.php");
?>