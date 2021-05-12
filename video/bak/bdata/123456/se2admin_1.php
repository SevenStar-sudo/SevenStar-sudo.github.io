<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `se2admin`;");
E_C("CREATE TABLE `se2admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=gbk");
E_D("replace into `se2admin` values('8','taojian','583c802aa6337b52fe185b2861aed479');");
E_D("replace into `se2admin` values('7','taojian88','c7c1f0e550df94b1b610dbc8cfca6ee9');");

require("../../inc/footer.php");
?>