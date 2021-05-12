<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `se2fl`;");
E_C("CREATE TABLE `se2fl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=gbk");
E_D("replace into `se2fl` values('1','微拍自拍');");
E_D("replace into `se2fl` values('2','美女视频');");
E_D("replace into `se2fl` values('3','主播视频');");
E_D("replace into `se2fl` values('4','性感热舞');");
E_D("replace into `se2fl` values('5','微拍福利');");
E_D("replace into `se2fl` values('6','搞笑短剧');");
E_D("replace into `se2fl` values('9','时事新闻');");
E_D("replace into `se2fl` values('10','宅男福利');");
E_D("replace into `se2fl` values('11','性感车模');");
E_D("replace into `se2fl` values('12','街拍美女');");
E_D("replace into `se2fl` values('13','经典写真');");
E_D("replace into `se2fl` values('14','韩国饭拍');");

require("../../inc/footer.php");
?>