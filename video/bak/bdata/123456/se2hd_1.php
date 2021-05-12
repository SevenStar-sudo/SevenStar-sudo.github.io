<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `se2hd`;");
E_C("CREATE TABLE `se2hd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) NOT NULL,
  `pic` varchar(1000) NOT NULL,
  `mpic` varchar(1000) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `syurl` varchar(1000) NOT NULL,
  `shijian` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk");
E_D("replace into `se2hd` values('1','Number 9 -- T-ara','/ad/AD_3.jpg','/pic/MD_1.jpg','2727','2727','10');");
E_D("replace into `se2hd` values('2','Sticky Sticky -- Hello Venus','/ad/AD_2.jpg','/pic/MD_2.jpg','2732','2732','10');");
E_D("replace into `se2hd` values('3','NoNoNo -- Apink','/ad/AD_1.jpg','/pic/MD_3.jpg','2726','2726','10');");
E_D("replace into `se2hd` values('4','Marionette -- Stellar','/ad/AD_4.jpg','/pic/MD_4.jpg','2725','2725','10');");
E_D("replace into `se2hd` values('5','βρΘ»ΠΔ¶― -- AOA','/ad/AD_5.jpg','/pic/MD_5.jpg','2729','2729','10');");

require("../../inc/footer.php");
?>