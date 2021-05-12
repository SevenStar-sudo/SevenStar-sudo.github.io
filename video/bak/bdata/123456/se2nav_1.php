<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `se2nav`;");
E_C("CREATE TABLE `se2nav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mor` int(2) unsigned NOT NULL DEFAULT '0',
  `name` varchar(1000) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `sort` int(8) unsigned NOT NULL DEFAULT '0',
  `member` int(2) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=gbk");
E_D("replace into `se2nav` values('29','0','美女','vod_list.php?flid=2','1','0');");
E_D("replace into `se2nav` values('30','0','写真','vod_list.php?flid=13','2','0');");
E_D("replace into `se2nav` values('31','0','街拍','vod_list.php?flid=12','3','0');");
E_D("replace into `se2nav` values('32','0','热舞','vod_list.php?flid=4','4','0');");
E_D("replace into `se2nav` values('33','0','饭拍','vod_list.php?flid=14','5','0');");
E_D("replace into `se2nav` values('35','0','福利','vod_list.php?flid=10','6','0');");
E_D("replace into `se2nav` values('46','1','主播','vod_list.php?flid=3','8','0');");
E_D("replace into `se2nav` values('48','0','微拍','vod_list.php?flid=1','7','0');");

require("../../inc/footer.php");
?>