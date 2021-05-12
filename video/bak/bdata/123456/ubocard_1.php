<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `ubocard`;");
E_C("CREATE TABLE `ubocard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) DEFAULT NULL,
  `pass` varchar(32) DEFAULT NULL,
  `money` decimal(10,2) DEFAULT '0.00',
  `serve` varchar(100) DEFAULT '',
  `serve_id` int(10) DEFAULT '0',
  `mgr` varchar(12) DEFAULT NULL,
  `terrace` varchar(100) DEFAULT NULL,
  `terrace_id` int(10) DEFAULT NULL,
  `kstime` int(10) DEFAULT '0',
  `endtime` int(10) DEFAULT '0',
  `status` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66830 DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>