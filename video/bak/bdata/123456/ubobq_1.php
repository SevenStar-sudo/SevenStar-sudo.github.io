<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `ubobq`;");
E_C("CREATE TABLE `ubobq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ccc` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk");
E_D("replace into `ubobq` values('1','no');");

require("../../inc/footer.php");
?>