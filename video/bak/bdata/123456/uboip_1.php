<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `uboip`;");
E_C("CREATE TABLE `uboip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(1000) NOT NULL,
  `cs` int(6) NOT NULL DEFAULT '0',
  `today` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=gbk");
E_D("replace into `uboip` values('23','101.199.112.49','19','1491669820');");
E_D("replace into `uboip` values('22','220.181.132.220','19','1491669809');");
E_D("replace into `uboip` values('21','114.236.132.56','0','1491629302');");
E_D("replace into `uboip` values('20','180.126.96.252','0','1491590737');");

require("../../inc/footer.php");
?>