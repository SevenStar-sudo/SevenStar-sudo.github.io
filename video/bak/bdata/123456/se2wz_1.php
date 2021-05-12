<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `se2wz`;");
E_C("CREATE TABLE `se2wz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(1000) NOT NULL,
  `keywords` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `lujing` varchar(1000) NOT NULL,
  `sk` int(3) NOT NULL DEFAULT '0',
  `wap` varchar(100) NOT NULL,
  `youke` int(6) NOT NULL DEFAULT '0',
  `pthy` int(6) NOT NULL DEFAULT '0',
  `viphy` int(6) NOT NULL DEFAULT '0',
  `iseveryday` int(1) NOT NULL DEFAULT '0',
  `today` int(10) NOT NULL DEFAULT '0',
  `automatic` int(1) NOT NULL DEFAULT '0',
  `apache` int(1) NOT NULL DEFAULT '0',
  `pull` int(1) NOT NULL DEFAULT '0',
  `givetime` int(5) NOT NULL DEFAULT '0',
  `isgive` int(1) NOT NULL DEFAULT '0',
  `givevip` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `se2wz` values('1','老司机影视','老司机影视,老司机影视网,老司机影院,老司机电影院','老司机电影网为您提供互联网内爆笑的视频资源，看后让您开心愉快、在线播放、无广告，无聊时看会搞笑视频开心一笑,深受广大上班族屌丝的热爱，我们的宗旨，开心一刻，爆笑一天，让欢笑进行到底。','/','30000','127.0.0.1','20','100','500','2','0','1','0','1','3','1','试用VIP会员');");

require("../../inc/footer.php");
?>