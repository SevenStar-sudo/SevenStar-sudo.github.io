<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `uboterrace`;");
E_C("CREATE TABLE `uboterrace` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `type` int(2) NOT NULL DEFAULT '0',
  `big_id` int(2) NOT NULL,
  `small_id` decimal(10,2) NOT NULL DEFAULT '0.00',
  `link` varchar(100) DEFAULT '',
  `sort` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66621 DEFAULT CHARSET=gbk");
E_D("replace into `uboterrace` values('66614','VIP月度会员','1','0','66611.00','http://pr.kuaifaka.com/item/fv5Pl1.html','0');");
E_D("replace into `uboterrace` values('66617','VIP季度会员','2','0','66611.00','http://wap.63pp.com/details/9B09D6776D09460C','0');");
E_D("replace into `uboterrace` values('66618','VIP半年会员','3','0','66611.00','http://wap.63pp.com/details/19A24983E1DD940D','0');");
E_D("replace into `uboterrace` values('66619','VIP年度会员','4','0','66611.00','http://wap.63pp.com/details/64F78F0F4CD1717F','0');");

require("../../inc/footer.php");
?>