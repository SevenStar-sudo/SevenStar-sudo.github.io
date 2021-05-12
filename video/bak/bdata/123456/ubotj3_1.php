<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `ubotj3`;");
E_C("CREATE TABLE `ubotj3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` varchar(100) NOT NULL,
  `uid` varchar(1000) NOT NULL,
  `money` varchar(1000) NOT NULL,
  `shijian` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=gbk");
E_D("replace into `ubotj3` values('2','优酷','http://v.youku.com/v_show/id_(*).html','http://yun.mt2t.com/yun?url=','0');");
E_D("replace into `ubotj3` values('5','土豆','http://www.tudou.com/albumplay/(*).html','http://www.dgua.xyz/webcloud/?url=','1');");
E_D("replace into `ubotj3` values('6','腾讯','https://v.qq.com/x/cover/(*).html','http://yun.mt2t.com/yun?url=','2');");
E_D("replace into `ubotj3` values('7','乐视','http://www.letv.com/ptv/vplay/(*).html','http://www.dgua.xyz/webcloud/?url=','3');");
E_D("replace into `ubotj3` values('8','芒果TV','http://www.mgtv.com/b/(*).html','http://www.dgua.xyz/webcloud/?url=','4');");
E_D("replace into `ubotj3` values('9','爱奇艺','http://www.iqiyi.com/v_(*).html','http://www.dgua.xyz/webcloud/?url=','5');");

require("../../inc/footer.php");
?>