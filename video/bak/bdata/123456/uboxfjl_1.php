<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `uboxfjl`;");
E_C("CREATE TABLE `uboxfjl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `zyid` int(11) NOT NULL DEFAULT '0',
  `type` int(10) NOT NULL DEFAULT '0',
  `state` int(1) unsigned NOT NULL DEFAULT '0',
  `url` varchar(100) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `money` decimal(10,2) NOT NULL,
  `user` varchar(100) NOT NULL,
  `addtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=264 DEFAULT CHARSET=gbk");
E_D("replace into `uboxfjl` values('94','908','20864','5','1','images.php?playid=20864&ly=ubosk','UgdpsycMcp','1.00','7683302255','1484321472');");
E_D("replace into `uboxfjl` values('95','908','20857','5','0','images.php?playid=20857&ly=ubosk','UgdpsycMcp','1.00','7683302255','1484321796');");
E_D("replace into `uboxfjl` values('96','908','20855','5','0','images.php?playid=20855&ly=ubosk','UgdpsycMcp','1.00','7683302255','1484321841');");
E_D("replace into `uboxfjl` values('97','908','20854','5','0','images.php?playid=20854&ly=ubosk','UgdpsycMcp','1.00','7683302255','1484321872');");
E_D("replace into `uboxfjl` values('99','611','20864','5','0','images.php?playid=20864&ly=ubosk','aEdwlNEjGG','1.00','0546784139','1484326295');");
E_D("replace into `uboxfjl` values('100','908','20862','5','0','images.php?playid=20862&ly=ubosk','UgdpsycMcp','1.00','7683302255','1484326458');");
E_D("replace into `uboxfjl` values('101','518','20849','5','0','images.php?playid=20849&ly=ubosk','bZYirbl98H','1.00','2619615228','1484331615');");
E_D("replace into `uboxfjl` values('102','518','20864','5','0','images.php?playid=20864&ly=ubosk','bZYirbl98H','1.00','2619615228','1484331666');");
E_D("replace into `uboxfjl` values('103','518','20862','5','0','images.php?playid=20862&ly=ubosk','bZYirbl98H','1.00','2619615228','1484331678');");
E_D("replace into `uboxfjl` values('104','1110','20868','5','0','images.php?playid=20868&ly=ubosk','brFDuJlBw6','1.00','2146712224','1484396559');");
E_D("replace into `uboxfjl` values('105','611','20867','5','0','images.php?playid=20867&ly=ubosk','aEdwlNEjGG','1.00','0546784139','1484396702');");
E_D("replace into `uboxfjl` values('106','611','17209','5','0','images.php?playid=17209&ly=ubosk','aEdwlNEjGG','1.00','0546784139','1484396959');");
E_D("replace into `uboxfjl` values('107','1248','20871','5','0','images.php?playid=20871&ly=ubosk','IJXvTPgM3j','1.00','4508067994','1484467038');");
E_D("replace into `uboxfjl` values('108','1248','20866','5','0','images.php?playid=20866&ly=ubosk','IJXvTPgM3j','1.00','4508067994','1484467171');");
E_D("replace into `uboxfjl` values('109','12','2708','1','0','play.php?playid=2708&ly=ubosk','vS4vtgBCqR','1.00','1714909308','1484469304');");
E_D("replace into `uboxfjl` values('110','12','2708','1','0','play.php?playid=2708&ly=ubosk','vS4vtgBCqR','1.00','1714909308','1484469452');");
E_D("replace into `uboxfjl` values('111','12','2708','1','0','play.php?playid=2708&ly=ubosk','vS4vtgBCqR','1.00','1714909308','1484469479');");
E_D("replace into `uboxfjl` values('234','26','94','8','0','xcplay.php?playid=94&ly=ubosk','NRglHnF8IP','10.00','3251319807','1496901278');");
E_D("replace into `uboxfjl` values('113','12','2722','1','0','play.php?playid=2722&ly=ubosk','vS4vtgBCqR','1.00','1714909308','1484470546');");
E_D("replace into `uboxfjl` values('114','1259','2728','1','0','play.php?playid=2728&ly=ubosk','l1Klc6SwfX','1.00','6871826068','1484470997');");
E_D("replace into `uboxfjl` values('115','12','15762','1','0','play.php?playid=15762&ly=ubosk','vS4vtgBCqR','1.00','1714909308','1484471006');");
E_D("replace into `uboxfjl` values('116','1259','15861','1','0','play.php?playid=15861&ly=ubosk','l1Klc6SwfX','1.00','6871826068','1484471708');");
E_D("replace into `uboxfjl` values('117','1259','16890','1','0','tvplay.php?playid=16890&ly=ubosk','l1Klc6SwfX','1.00','6871826068','1484474203');");
E_D("replace into `uboxfjl` values('118','1259','16890','2','0','tvplay.php?playid=16890&ly=ubosk','l1Klc6SwfX','1.00','6871826068','1484474323');");
E_D("replace into `uboxfjl` values('119','1259','16237','3','0','movieplay.php?playid=16237&ly=ubosk','l1Klc6SwfX','1.00','6871826068','1484475309');");
E_D("replace into `uboxfjl` values('120','1259','16906','4','0','comicplay.php?playid=16906&ly=ubosk','l1Klc6SwfX','1.00','6871826068','1484475626');");
E_D("replace into `uboxfjl` values('121','518','10698','1','0','play.php?playid=10698&ly=ubosk','bZYirbl98H','1.00','2619615228','1484493678');");
E_D("replace into `uboxfjl` values('122','518','12610','1','0','play.php?playid=12610&ly=ubosk','bZYirbl98H','1.00','2619615228','1484493921');");
E_D("replace into `uboxfjl` values('123','1320','20881','5','0','images.php?playid=20881&ly=ubosk','UyZjhjebbu','1.00','4924852608','1484589175');");
E_D("replace into `uboxfjl` values('124','1320','19742','5','0','images.php?playid=19742&ly=ubosk','UyZjhjebbu','1.00','4924852608','1484589336');");
E_D("replace into `uboxfjl` values('125','1320','15613','1','0','play.php?playid=15613&ly=ubosk','UyZjhjebbu','1.00','4924852608','1484589553');");
E_D("replace into `uboxfjl` values('126','1672','20896','5','0','images.php?playid=20896&ly=ubosk','n1evTYVk5k','1.00','7854923767','1484668778');");
E_D("replace into `uboxfjl` values('127','12','16701','2','0','tvplay.php?playid=16701&ly=ubosk','vS4vtgBCqR','1.00','1714909308','1484673599');");
E_D("replace into `uboxfjl` values('128','1320','16907','2','0','tvplay.php?playid=16907&ly=ubosk','UyZjhjebbu','1.00','4924852608','1485026965');");
E_D("replace into `uboxfjl` values('129','2635','20973','5','0','images.php?playid=20973&ly=ubosk','wfs9G2xI3r','1.00','8422257124','1485246989');");
E_D("replace into `uboxfjl` values('130','2810','20980','5','0','images.php?playid=20980&ly=ubosk','deVzjkEEgQ','1.00','2151897617','1485324207');");
E_D("replace into `uboxfjl` values('131','2936','735','1','0','play.php?playid=735&ly=ubosk','hnXLlfdHrc','1.00','3095878226','1485368867');");
E_D("replace into `uboxfjl` values('132','846','21003','5','0','images.php?playid=21003&ly=ubosk','zvaEgBskk9','1.00','5269376992','1485429031');");
E_D("replace into `uboxfjl` values('133','3461','18124','3','0','movieplay.php?playid=18124&ly=ubosk','ZHVzUsG3rB','1.00','9321166713','1485626459');");
E_D("replace into `uboxfjl` values('134','3461','16865','3','0','movieplay.php?playid=16865&ly=ubosk','ZHVzUsG3rB','1.00','9321166713','1485628800');");
E_D("replace into `uboxfjl` values('135','3461','18350','3','0','movieplay.php?playid=18350&ly=ubosk','ZHVzUsG3rB','1.00','9321166713','1485655343');");
E_D("replace into `uboxfjl` values('136','4050','21036','5','0','images.php?playid=21036&ly=ubosk','A71YtjJYiI','1.00','5919853109','1485888043');");
E_D("replace into `uboxfjl` values('137','5893','1366','5','0','images.php?playid=1366&ly=ubosk','tRcIRddTBA','1.00','6485439390','1486777930');");
E_D("replace into `uboxfjl` values('138','5986','21167','5','0','images.php?playid=21167&ly=ubosk','UhaF6Aa8wE','1.00','2599993012','1486822877');");
E_D("replace into `uboxfjl` values('139','6215','21179','5','0','images.php?playid=21179&ly=ubosk','idrr3u44CS','1.00','9416664191','1486956361');");
E_D("replace into `uboxfjl` values('140','6661','21189','5','0','images.php?playid=21189&ly=ubosk','y833hDwrFq','1.00','6779040850','1487241613');");
E_D("replace into `uboxfjl` values('141','6974','21163','5','0','images.php?playid=21163&ly=ubosk','6YGFxUzSxT','1.00','3702046582','1487390928');");
E_D("replace into `uboxfjl` values('142','9062','842','5','0','images.php?playid=842&ly=ubosk','QQgAmkcsm8','1.00','1379000064','1488115829');");
E_D("replace into `uboxfjl` values('143','9281','21318','5','0','images.php?playid=21318&ly=ubosk','tFBtjh2YVa','1.00','2857550982','1488213437');");
E_D("replace into `uboxfjl` values('144','9317','21316','5','0','images.php?playid=21316&ly=ubosk','qSz5lw4JMJ','1.00','china1314520i','1488219268');");
E_D("replace into `uboxfjl` values('145','6876','21432','5','0','images.php?playid=21432&ly=ubosk','PzDNehzhgi','1.00','6498483418','1489228401');");
E_D("replace into `uboxfjl` values('146','6876','21439','5','0','images.php?playid=21439&ly=ubosk','PzDNehzhgi','1.00','6498483418','1489228491');");
E_D("replace into `uboxfjl` values('147','13862','1849','5','0','images.php?playid=11&ly=down','xvNJI3FEgV','1.00','5577553342','1489234355');");
E_D("replace into `uboxfjl` values('148','13925','21427','5','0','images.php?playid=21427&ly=ubosk','6FhCTC9qhs','1.00','5298476277','1489246868');");
E_D("replace into `uboxfjl` values('149','13925','21439','5','0','images.php?playid=21439&ly=ubosk','6FhCTC9qhs','1.00','5298476277','1489288402');");
E_D("replace into `uboxfjl` values('150','14156','21441','5','0','images.php?playid=21441&ly=ubosk','s1SmtSKCTJ','1.00','565656','1489304320');");
E_D("replace into `uboxfjl` values('151','16951','21480','5','0','images.php?playid=21480&ly=ubosk','r6a5iBDH4m','1.00','9335075138','1489887473');");
E_D("replace into `uboxfjl` values('152','16951','21477','5','0','/images.php?playid=21477&ly=ubosk','r6a5iBDH4m','1.00','9335075138','1489887924');");
E_D("replace into `uboxfjl` values('153','16951','21474','5','0','images.php?playid=21474&ly=ubosk','r6a5iBDH4m','1.00','9335075138','1489888042');");
E_D("replace into `uboxfjl` values('154','5261','21483','5','0','images.php?playid=21483&ly=ubosk','NBChWJpcl5','1.00','0618055568','1490029524');");
E_D("replace into `uboxfjl` values('155','230','21492','5','0','images.php?playid=21492&ly=ubosk','xaAqPM54Ld','1.00','3137189012','1490282435');");
E_D("replace into `uboxfjl` values('156','5735','21533','5','0','images.php?playid=21533&ly=ubosk','MIsWDYMbvK','1.00','123123','1491502467');");
E_D("replace into `uboxfjl` values('157','5735','20483','5','0','images.php?playid=20483&ly=ubosk','MIsWDYMbvK','1.00','123123','1491502555');");
E_D("replace into `uboxfjl` values('158','6960','21743','5','0','images.php?playid=21743&ly=ubosk','wnLPdAbavn','1.00','6322690982','1494485208');");
E_D("replace into `uboxfjl` values('159','26913','21812','5','0','images.php?playid=21812&ly=ubosk','L2Cs4MhJYk','1.00','5942727626','1495474223');");
E_D("replace into `uboxfjl` values('249','26','95','8','1','xcplay.php?playid=95&ly=ubosk','NRglHnF8IP','10.00','3251319807','1497226717');");
E_D("replace into `uboxfjl` values('250','26','88','8','1','xcplay.php?playid=88&ly=ubosk','NRglHnF8IP','10.00','3251319807','1497226732');");
E_D("replace into `uboxfjl` values('248','26','97','8','1','xcplay.php?playid=97&ly=ubosk','NRglHnF8IP','20.00','3251319807','1497226702');");
E_D("replace into `uboxfjl` values('247','341','54','8','0','xcplay.php?playid=54&ly=ubosk','JAjy6KBt6K','10.00','6209361882','1497194731');");
E_D("replace into `uboxfjl` values('246','341','94','8','0','xcplay.php?playid=94&ly=ubosk','JAjy6KBt6K','10.00','6209361882','1497194664');");
E_D("replace into `uboxfjl` values('237','26','54','8','0','xcplay.php?playid=54&ly=ubosk','NRglHnF8IP','10.00','3251319807','1496903224');");
E_D("replace into `uboxfjl` values('238','26','3','8','1','xcplay.php?playid=3&ly=ubosk','NRglHnF8IP','10.00','3251319807','1496903249');");
E_D("replace into `uboxfjl` values('239','21788','94','8','0','xcplay.php?playid=94&ly=ubosk','zVyHeKzkEQ','10.00','6048133503','1496904754');");
E_D("replace into `uboxfjl` values('240','37105','0','0','0','tvplay.php','DbsDlCduGQ','1.00','2713788519','1496931894');");
E_D("replace into `uboxfjl` values('241','37105','17154','2','0','tvplay.php','DbsDlCduGQ','1.00','2713788519','1496931894');");
E_D("replace into `uboxfjl` values('242','26','9','8','1','xcplay.php?playid=9&ly=ubosk','NRglHnF8IP','10.00','3251319807','1496932698');");
E_D("replace into `uboxfjl` values('243','21788','97','8','0','xcplay.php?playid=97&ly=ubosk','zVyHeKzkEQ','20.00','6048133503','1497070181');");
E_D("replace into `uboxfjl` values('244','21788','95','8','1','xcplay.php?playid=95&ly=ubosk','zVyHeKzkEQ','10.00','6048133503','1497079165');");
E_D("replace into `uboxfjl` values('245','341','97','8','1','xcplay.php?playid=97&ly=ubosk','JAjy6KBt6K','20.00','6209361882','1497194426');");
E_D("replace into `uboxfjl` values('251','35158','21999','5','0','images.php?playid=21999&ly=ubosk','ukGva3bY6H','1.00','1583047532','1497867892');");
E_D("replace into `uboxfjl` values('252','43276','21998','5','0','images.php?playid=21998&ly=ubosk','zplTTq7Whb','1.00','0589415179','1498420705');");
E_D("replace into `uboxfjl` values('253','46229','54','8','0','xcplay.php?playid=54&ly=ubosk','nZNHLmm5i6','10.00','1613162278','1499183739');");
E_D("replace into `uboxfjl` values('254','46229','94','8','0','xcplay.php?playid=94&ly=ubosk','nZNHLmm5i6','10.00','1613162278','1499183882');");
E_D("replace into `uboxfjl` values('255','48919','88','8','1','xcplay.php?playid=88&ly=ubosk','8Wfvh1UcFF','10.00','1098675138','1499875221');");
E_D("replace into `uboxfjl` values('256','52628','54','8','0','xcplay.php?playid=54&ly=ubosk','uMNRuuYhPk','10.00','9125547201','1500778137');");
E_D("replace into `uboxfjl` values('257','58815','76731','1','0','play.php?playid=76731&ly=ubosk','jLpL6xlhq3','1.00','9115102668','1502657437');");
E_D("replace into `uboxfjl` values('258','58047','22042','5','0','images.php?playid=22042&ly=ubosk','mDw2TwwXWU','1.00','7485505592','1504105522');");
E_D("replace into `uboxfjl` values('259','26','55','8','1','xcplay_55.html','NRglHnF8IP','10.00','3251319807','1504794089');");
E_D("replace into `uboxfjl` values('260','26','13','8','1','xcplay_13.html','NRglHnF8IP','10.00','3251319807','1504794104');");
E_D("replace into `uboxfjl` values('261','26','45','8','1','xcplay_45.html','NRglHnF8IP','10.00','3251319807','1504794116');");
E_D("replace into `uboxfjl` values('262','94537','39350','5','0','images_39350.html','wVSMyq3aXt','1.00','8500863072','1510644555');");
E_D("replace into `uboxfjl` values('263','131316','21983','5','0','images.php?playid=21983&ly=ubosk','1RzyZGRuFZ','1.00','4443025900','1510763962');");

require("../../inc/footer.php");
?>