<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `ubozb`;");
E_C("CREATE TABLE `ubozb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fenlei` int(5) unsigned NOT NULL DEFAULT '0',
  `member` int(2) unsigned NOT NULL DEFAULT '0',
  `pic` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `hit` varchar(255) NOT NULL DEFAULT '1993',
  `diqu` varchar(255) DEFAULT NULL,
  `money` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `price` int(2) unsigned NOT NULL DEFAULT '0',
  `cishu` int(5) unsigned NOT NULL DEFAULT '0',
  `hits` int(5) unsigned NOT NULL DEFAULT '0',
  `favorite` int(5) unsigned NOT NULL DEFAULT '0',
  `room` int(3) unsigned NOT NULL DEFAULT '30',
  `enroll` int(3) unsigned NOT NULL DEFAULT '0',
  `surplus` int(3) unsigned NOT NULL DEFAULT '30',
  `xcstate` int(2) unsigned NOT NULL DEFAULT '0',
  `switch` int(2) unsigned NOT NULL DEFAULT '0',
  `trends` int(4) unsigned NOT NULL DEFAULT '0',
  `contents` text,
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `concern` int(6) unsigned NOT NULL DEFAULT '0',
  `division` int(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=108 DEFAULT CHARSET=gbk ROW_FORMAT=DYNAMIC");
E_D("replace into `ubozb` values('1','0','0','img/1.jpg','魅狐','http://zbup.jiaxinjiafang.com/mp4/4bd7cb3e-f02f-4b06-a91a-ec9de76881af.mp4','2553','成都市','0.00','5','2','0','0','30','30','30','0','1','74','','1497080341','0','1');");
E_D("replace into `ubozb` values('2','0','0','img/2.jpg','我爱台妹','http://jiexi.105.zhuboqiang.com/down.php/down/tianyi/730/2154321388437438.flv','5896','台湾省','0.00','10','2','0','0','30','30','0','2','1','83','','1496851561','0','1');");
E_D("replace into `ubozb` values('3','0','0','img/3.jpg','小公举','http://z9.syasn.com/zb/zb254.mp4','8990','苏州市','0.00','10','19','0','0','30','11','0','0','0','71','','1496925001','0','1');");
E_D("replace into `ubozb` values('4','0','0','img/5.jpg','演员王永峰','http://zbup.jiaxinjiafang.com/mp4/f98382bf-ee67-4159-9416-b507d5a96d26.mp4','5893','酒泉市','0.00','0','0','0','0','30','0','30','0','1','85','','1496733688','0','1');");
E_D("replace into `ubozb` values('5','0','0','img/6.jpg','EiWen','http://zbup.jiaxinjiafang.com/mp4/f1881d3b-5867-4952-8481-539dbfd96d65.mp4','6698','商丘市','0.00','0','0','0','0','30','0','30','0','1','87','','1496733695','0','1');");
E_D("replace into `ubozb` values('6','0','0','img/7.jpg','若曦 ','http://zbup.jiaxinjiafang.com/mp4/dd7c3225-803b-46cc-bed1-85b8653e6dd5.mp4','8987','浙江省','0.00','0','0','0','0','30','0','30','0','1','86','','1496733703','0','1');");
E_D("replace into `ubozb` values('7','0','0','img/8.jpg','猫啊瞄吖猫','http://zbup.jiaxinjiafang.com/mp4/5f104851-8ea7-4c0c-b99a-b4b36f804365.mp4','4658','重庆市','0.00','0','0','0','0','30','0','30','0','1','82','','1496733783','0','1');");
E_D("replace into `ubozb` values('8','0','0','img/9.jpg','桃君','http://zbup.jiaxinjiafang.com/mp4/f77d612e-9382-4a59-8ce0-6b1ed035d100.mp4','1235','淄博市','0.00','0','0','0','0','30','0','30','0','1','84','','1496733790','0','1');");
E_D("replace into `ubozb` values('9','0','0','img/10.jpg','小小酥','http://zbup.jiaxinjiafang.com/mp4/787fee9f-5abb-46b0-b4af-1deff68f87e4.mp4','9988','上海市','0.00','10','0','0','0','30','1','0','0','0','75','','1496933401','0','1');");
E_D("replace into `ubozb` values('10','0','0','img/11.jpg','六儿','http://zbup.jiaxinjiafang.com/mp4/83d135d6-7103-47d9-9e4b-956747911014.mp4','1025','福州市','0.00','0','1','0','0','30','0','30','0','1','74','','1496733803','0','1');");
E_D("replace into `ubozb` values('11','0','0','img/12.jpg','David','http://zbup.jiaxinjiafang.com/mp4/voice/black_voice1.mp4','8895','长春市','0.00','0','0','0','0','30','0','30','0','1','82','','1496733809','0','1');");
E_D("replace into `ubozb` values('12','0','0','img/13.jpg','阿培','http://zbup.jiaxinjiafang.com/mp4/0a41adfc-4dbb-4efa-afe3-3b3dbfbbb7d8.mp4','9985','内江市','0.00','0','0','0','0','30','0','30','0','1','68','','1496733816','0','1');");
E_D("replace into `ubozb` values('13','0','0','img/14.jpg','雅熙','http://zbup.jiaxinjiafang.com/mp4/voice/black_voice2.mp4','2588','郑州市','0.00','10','17','0','1','30','1','0','0','0','73','','1496906581','1','1');");
E_D("replace into `ubozb` values('14','0','0','img/15.jpg','寒雪菲菲','http://zbup.jiaxinjiafang.com/mp4/ca85d1fc-6c6b-4a45-a267-927c0cb8488c.mp4','822','丹东市','0.00','0','1','0','0','30','30','0','0','1','81','','1497078781','0','1');");
E_D("replace into `ubozb` values('15','0','0','img/16.jpg','小淑','http://zbup.jiaxinjiafang.com/mp4/5c8564a8-f3ad-4c51-bdf4-78f2defa2a56.mp4','8895','上海市','0.00','0','0','0','0','30','0','30','0','1','69','','1496733830','0','1');");
E_D("replace into `ubozb` values('16','0','0','img/17.jpg','ZXY','http://zbup.jiaxinjiafang.com/mp4/1da34f85-8a5c-4632-8e96-664f389c37c6.mp4','8966','绍兴市','0.00','0','1','0','0','30','0','30','0','1','92','','1496733852','0','1');");
E_D("replace into `ubozb` values('17','0','0','img/18.jpg','yang','http://zbup.jiaxinjiafang.com/mp4/9c7ae9cc-4e3a-485b-9a5f-46b5470479f0.mp4','1563','常州市','0.00','0','0','0','0','30','0','30','0','1','97','','1496733861','0','1');");
E_D("replace into `ubozb` values('18','0','0','img/19.jpg','露娜','http://zbup.jiaxinjiafang.com/mp4/4a2c32f3-e50f-4fba-bed2-5f907c38bb53.mp4','897','庆阳市','0.00','0','0','0','0','30','0','30','0','1','87','','1496734052','0','1');");
E_D("replace into `ubozb` values('19','0','0','img/20.jpg','旧爱','http://zbup.jiaxinjiafang.com/mp4/cc81cec7-41fd-49f4-821c-5b6088881196.mp4','8955','北京市','0.00','0','0','0','0','30','0','30','0','1','82','','1496733868','0','1');");
E_D("replace into `ubozb` values('20','0','0','img/21.jpg','龙坤','http://zbup.jiaxinjiafang.com/mp4/19debdfd-b3c3-4451-bd24-a40db39a60d2.mp4','1569','洛阳市','0.00','0','0','0','0','30','0','30','0','1','72','','1496734045','0','1');");
E_D("replace into `ubozb` values('21','0','0','img/22.jpg','阳阳','http://zbup.jiaxinjiafang.com/mp4/ad36022f-002a-47da-971a-2dab73b890db.mp4','2356','鹤岗市','0.00','0','1','0','0','30','0','30','0','1','74','','1496733961','0','1');");
E_D("replace into `ubozb` values('22','0','0','img/23.jpg','研研baby','http://zbup.jiaxinjiafang.com/mp4/c550ab87-9cf1-4424-8890-5f61d07a747a.mp4','1986','嘉兴市','0.00','10','0','0','0','30','0','30','0','1','93','','1497079501','0','1');");
E_D("replace into `ubozb` values('23','0','0','img/24.jpg','2尧','http://zbup.jiaxinjiafang.com/mp4/e681b321-1a9d-478a-830a-f18733d053f7.mp4','1786','葫芦岛市','0.00','0','1','0','0','30','0','30','0','1','70','','1496733947','0','1');");
E_D("replace into `ubozb` values('24','0','0','img/26.jpg','豆豆萌主','http://zbup.jiaxinjiafang.com/mp4/4aa93fc2-81d1-419c-9e08-6e8f1e94d5f6.mp4','1658','牡丹江市','0.00','0','0','0','0','30','0','30','0','1','82','','1496733941','0','1');");
E_D("replace into `ubozb` values('25','0','0','img/27.jpg','蛋仔','http://zbup.jiaxinjiafang.com/mp4/c9090ce7-8f91-413d-83c1-85d50dbd7715.mp4','1596','貌似不在地球','0.00','0','1','0','0','30','0','30','0','1','90','','1496733934','0','1');");
E_D("replace into `ubozb` values('26','0','0','img/28.jpg','沫熙','http://zbup.jiaxinjiafang.com/mp4/28f71af0-6a59-472c-8e2a-aa1bf17aec32.mp4','1478','东莞市','0.00','0','0','0','0','30','0','30','0','1','68','','1496733920','0','1');");
E_D("replace into `ubozb` values('27','0','0','img/29.jpg','木梳','http://zbup.jiaxinjiafang.com/mp4/8ff44df1-bff0-4a19-8a76-7152a9295647.mp4','1356','来宾市','0.00','0','2','0','0','30','0','30','0','1','86','','1496733911','0','1');");
E_D("replace into `ubozb` values('28','0','0','img/30.jpg','MissXu','http://zbup.jiaxinjiafang.com/mp4/8e5bfd7e-87f6-4163-b91f-182c846d3d1f.mp4','1236','衡州市','0.00','0','2','0','0','30','0','30','0','1','82','','1496733896','0','1');");
E_D("replace into `ubozb` values('29','0','0','img/31.jpg','可爱瑞','http://zbup.jiaxinjiafang.com/mp4/9197ff1d-aca4-460b-9a6e-bab81c3f9d61.mp4','5987','东莞市','0.00','0','0','0','0','30','0','30','0','1','71','','1496733843','0','1');");
E_D("replace into `ubozb` values('30','0','0','img/33.jpg','思新','http://zbup.jiaxinjiafang.com/mp4/76f77abd-cc52-42aa-9e85-6fe37aaa33c3.mp4','3568','武汉市','0.00','0','0','0','0','30','0','30','0','1','77','','1496733681','0','1');");
E_D("replace into `ubozb` values('31','0','0','img/34.jpg','欣宝','http://zbup.jiaxinjiafang.com/mp4/e4a39c59-8a6f-499c-a426-5f4560530b0a.mp4','3698','杭州市','0.00','0','0','0','0','30','0','30','0','1','102','','0','0','1');");
E_D("replace into `ubozb` values('32','0','0','img/35.jpg','思思','http://zbup.jiaxinjiafang.com/mp4/6c5f91d7-c738-4850-a69c-3787a1115222.mp4','3795','惠州市','0.00','0','2','0','0','30','0','30','0','1','71','','0','0','1');");
E_D("replace into `ubozb` values('33','0','0','img/36.jpg','露露姐','http://zbup.jiaxinjiafang.com/mp4/c99cffc5-f473-45b2-9cfb-2e0f52bd8382.mp4','3896','武汉市','0.00','0','0','0','0','30','0','30','0','1','64','','0','0','1');");
E_D("replace into `ubozb` values('34','0','0','img/37.jpg','荣儿','http://zbup.jiaxinjiafang.com/mp4/edfd0463-46b5-4f3b-9d07-9a918f137548.mp4','3986','成都市','0.00','0','0','0','0','30','0','30','0','1','74','','0','0','1');");
E_D("replace into `ubozb` values('38','0','0','img/38.jpg','柚子柚子呀','http://zbup.jiaxinjiafang.com/mp4/21f84b05-480f-4fd8-8a31-6301211e7740.mp4','3986','漳州市','0.00','0','0','0','0','30','0','30','0','1','79','','0','0','1');");
E_D("replace into `ubozb` values('39','0','0','img/39.jpg','小妖精','http://zbup.jiaxinjiafang.com/mp4/e4a0f098-a469-4337-9e31-31a3728e8291.mp4','13986','无锡市','0.00','0','0','0','0','30','0','30','0','1','79','','0','0','1');");
E_D("replace into `ubozb` values('40','0','0','img/40.jpg','猫猫','http://zbup.jiaxinjiafang.com/mp4/2792690a-e046-4da9-894b-f3c5fd119bfe.mp4','1986','营口市','0.00','0','2','0','0','30','0','30','0','1','79','','0','0','1');");
E_D("replace into `ubozb` values('41','0','0','img/41.jpg','夏天','http://zbup.jiaxinjiafang.com/mp4/e889c36e-e3ed-466d-bb89-df35e9af479a.mp4','1987','武汉市','0.00','0','1','0','0','30','0','30','0','1','87','','1497049201','0','1');");
E_D("replace into `ubozb` values('42','0','0','img/42.jpg','勿忘初心','http://zbup.jiaxinjiafang.com/mp4/ea5b0193-c378-49a8-98cb-e3d33159cfe9.mp4','1988','咸阳市','0.00','0','0','0','0','30','0','30','0','1','84','','0','0','1');");
E_D("replace into `ubozb` values('44','0','0','img/44.jpg','南姑','http://zbup.jiaxinjiafang.com/mp4/df2e736b-edb4-46ea-84c8-0cb621afe118.mp4','1989','黄石市','0.00','0','2','0','0','30','0','30','0','1','86','','0','0','1');");
E_D("replace into `ubozb` values('45','0','0','img/45.jpg','女神熙','http://zbup.jiaxinjiafang.com/mp4/4b82be95-5fb9-4321-bdd5-1e2e612c1e3c.mp4','1990','台州市','0.00','10','1','0','0','30','1','0','0','0','78','','1496876401','0','1');");
E_D("replace into `ubozb` values('46','0','0','img/46.jpg','木子','http://zbup.jiaxinjiafang.com/mp4/78067885-071a-4328-9bd0-12507c3c3ade.mp4','1991','貌似不在地球','0.00','0','0','0','0','30','1','0','0','1','68','','0','0','1');");
E_D("replace into `ubozb` values('47','0','0','img/47.jpg','樱宁','http://zbup.jiaxinjiafang.com/mp4/74719961-e813-4218-8db5-40000e62dc70.mp4','1992','湖州市','0.00','0','1','0','0','30','0','30','0','1','76','','0','0','1');");
E_D("replace into `ubozb` values('48','0','0','img/48.jpg','妖精','http://zbup.jiaxinjiafang.com/mp4/22d8a008-e49d-4c96-8b4b-cf3896484182.mp4','1993','佛山市','0.00','0','0','0','0','30','0','30','0','1','89','','0','0','1');");
E_D("replace into `ubozb` values('49','0','0','img/49.jpg','筱筱','http://zbup.jiaxinjiafang.com/mp4/e668c62a-233e-4011-8dc3-b5936258ac2c.mp4','1993','舟山市','0.00','0','0','0','0','30','0','30','0','1','76','','0','0','1');");
E_D("replace into `ubozb` values('50','0','0','img/50.jpg','小柳岩','http://zbup.jiaxinjiafang.com/mp4/1711219f-907a-4b9d-bad1-9468ad0d1b96.mp4','1993','宁波市','0.00','0','0','0','0','30','0','30','0','1','88','','0','0','1');");
E_D("replace into `ubozb` values('51','0','0','img/51.jpg','涵涵','http://zbup.jiaxinjiafang.com/mp4/4b8da55d-6a7f-43e1-ad79-775a9333d1d0.mp4','1993','秦皇岛','0.00','0','0','0','0','30','0','30','0','1','83','','0','0','1');");
E_D("replace into `ubozb` values('52','0','0','img/52.jpg','波多野荔枝','http://zbup.jiaxinjiafang.com/mp4/a5ae13b0-c117-47c9-ab1d-fd9acb9833f1.mp4','1993','厦门市','0.00','0','0','0','0','30','0','30','0','1','78','','0','0','1');");
E_D("replace into `ubozb` values('53','0','0','img/53.jpg','寒晓凝','http://zbup.jiaxinjiafang.com/mp4/e5794b12-1a03-4d84-b193-b4beef9b2d18.mp4','1993','绍兴市','0.00','0','0','0','0','30','0','30','0','1','84','','0','0','1');");
E_D("replace into `ubozb` values('54','10','0','img/54.jpg','贝拉','http://dl.9ky.cc/edccfc27-f141-4760-b458-95165c902f191.mp4','1993','杭州市','0.00','10','9','0','0','30','21','0','1','0','69','','1513663201','0','1');");
E_D("replace into `ubozb` values('55','0','0','img/55.jpg','娜宝','http://zbup.jiaxinjiafang.com/mp4/17d605c3-edd6-43c9-a9e4-448ad20781bf.mp4','1993','黄石市','0.00','10','0','0','0','30','1','0','0','0','78','','1496876401','0','1');");
E_D("replace into `ubozb` values('56','0','0','img/56.jpg','Luna','http://zbup.jiaxinjiafang.com/mp4/8580de73-134d-4300-ab49-0c042ffc5f4c.mp4','1993','重庆市','0.00','0','0','0','0','30','0','30','0','1','62','','0','0','1');");
E_D("replace into `ubozb` values('57','0','0','img/57.jpg','桃花姐姐','http://zbup.jiaxinjiafang.com/mp4/949fc475-85bb-49ae-9022-eba94f3e005a.mp4','1993','杭州市','0.00','0','1','0','0','30','0','30','0','1','77','','0','0','1');");
E_D("replace into `ubozb` values('58','0','0','img/58.jpg','佳音','http://zbup.jiaxinjiafang.com/mp4/6196f039-84e7-4011-8764-dba08756f5c7.mp4','1993','辽阳市','0.00','0','1','0','0','30','0','30','0','1','108','','0','0','1');");
E_D("replace into `ubozb` values('59','0','0','img/59.jpg','当当','http://zbup.jiaxinjiafang.com/mp4/df740d0b-e6c3-4cdc-ae8f-4bcca0ea132b.mp4','1993','深圳市','0.00','0','0','0','0','30','0','30','0','1','74','','0','0','1');");
E_D("replace into `ubozb` values('60','0','0','img/60.jpg','麦兜宝宝','http://zbup.jiaxinjiafang.com/mp4/c612def1-57f6-4af0-8ce8-b8cf2d0b043d.mp4','1993','漳州市','0.00','0','0','0','0','30','0','30','0','1','81','','0','0','1');");
E_D("replace into `ubozb` values('61','0','0','img/61.jpg','杨小云','http://zbup.jiaxinjiafang.com/mp4/6398c447-1553-43a0-b2ca-3c0d17c5758d.mp4','1993','成都市','0.00','0','2','0','0','30','0','30','0','1','77','','0','0','1');");
E_D("replace into `ubozb` values('62','0','0','img/62.jpg','羊咩咩','http://zbup.jiaxinjiafang.com/mp4/d0301121-d43a-4c87-b92c-df383ab3d9e9.mp4','1993','广州市','0.00','0','1','0','0','30','0','30','0','1','83','','0','0','1');");
E_D("replace into `ubozb` values('63','0','0','img/63.jpg','丹妮','http://zbup.jiaxinjiafang.com/mp4/3f2b5482-7984-46b4-bc8a-486fcb974cf3.mp4','1993','成都市','0.00','0','0','0','0','30','0','30','0','1','74','','0','0','1');");
E_D("replace into `ubozb` values('64','0','0','img/64.jpg','慧儿','http://zbup.jiaxinjiafang.com/mp4/c6955fbf-9b4b-4cd2-bbe2-cf5c266bb6b7.mp4','1993','东莞市','0.00','0','0','0','0','30','0','30','0','1','81','','0','0','1');");
E_D("replace into `ubozb` values('65','0','0','img/65.jpg','小叶子','http://zbup.jiaxinjiafang.com/mp4/4648f869-b5a9-4077-8d96-9e530c193027.mp4','1993','安庆市','0.00','0','0','0','0','30','0','30','0','1','74','','0','0','1');");
E_D("replace into `ubozb` values('66','0','0','img/66.jpg','忘梦悠','http://zbup.jiaxinjiafang.com/mp4/c111b709-3272-490f-aac9-2e9c1661e893.mp4','1993','大连市','0.00','0','0','0','0','30','0','30','0','1','67','','0','0','1');");
E_D("replace into `ubozb` values('67','0','0','img/67.jpg','童童童','http://zbup.jiaxinjiafang.com/mp4/f845f629-a079-413c-8ef8-aafe71036390.mp4','1993','徐州市','0.00','0','1','0','0','30','0','30','0','1','79','','0','0','1');");
E_D("replace into `ubozb` values('68','0','0','img/68.jpg','Auue','http://zbup.jiaxinjiafang.com/mp4/eaf2e0d1-adb1-47b3-95ed-3754c1231c02.mp4','1993','成都市','0.00','0','2','0','0','30','0','30','0','1','78','','0','0','1');");
E_D("replace into `ubozb` values('70','0','0','img/70.jpg','虎牙妹妹','http://zbup.jiaxinjiafang.com/mp4/8a82bc36-c71c-4c74-8b9e-ccc2f100f58e.mp4','1993','苏州市','0.00','0','0','0','0','30','0','30','0','1','88','','0','0','1');");
E_D("replace into `ubozb` values('71','0','0','img/71.jpg','宝宝','http://zbup.jiaxinjiafang.com/mp4/e41bba8b-ff36-4a51-ae19-fd69ae2134a5.mp4','1993','成都市','0.00','0','3','0','0','30','0','30','0','1','84','','0','0','1');");
E_D("replace into `ubozb` values('72','0','0','img/72.jpg','水妹儿','http://zbup.jiaxinjiafang.com/mp4/20043a73-b014-4bef-b0b6-44d66308b51e.mp4','1993','三明市','2.00','0','6','0','0','30','0','30','0','1','92','','0','1','1');");
E_D("replace into `ubozb` values('73','0','0','img/73.jpg','粉红玛丽','http://zbup.jiaxinjiafang.com/mp4/ddc808b2-a557-47ba-8cc7-17c731bbc8df.mp4','1993','济南市','0.00','0','1','0','0','30','0','30','0','1','83','','0','0','1');");
E_D("replace into `ubozb` values('74','0','0','img/74.jpg','珍妃','http://zbup.jiaxinjiafang.com/mp4/eed40e89-5435-4610-a6c3-ea175ff91511.mp4','1993','西安市','0.00','0','1','0','0','30','0','30','0','1','102','','0','0','1');");
E_D("replace into `ubozb` values('75','0','0','img/75.jpg','小雨伞','http://zbup.jiaxinjiafang.com/mp4/979c6517-f807-409f-9f20-5111c9093870.mp4','1993','北京市','0.00','0','0','0','0','30','0','30','0','1','78','','0','0','1');");
E_D("replace into `ubozb` values('76','0','0','img/76.jpg','大波波','http://zbup.jiaxinjiafang.com/mp4/18bea6e4-7e77-48a1-a07d-c9c3e76d3145.mp4','1993','杭州市','0.00','0','0','0','0','30','0','30','0','1','86','','0','0','1');");
E_D("replace into `ubozb` values('77','0','0','img/77.jpg','茉莉姐','http://zbup.jiaxinjiafang.com/mp4/97cb66b1-a5c7-4409-9f76-a2ef71b62a08.mp4','1993','天津市','0.00','0','0','0','0','30','0','30','0','1','75','','0','0','1');");
E_D("replace into `ubozb` values('78','0','0','img/78.jpg','小媛媛','http://zbup.jiaxinjiafang.com/mp4/02784249-adb1-491a-8d71-9ca2dbdef8c4.mp4','1993','南京市','0.00','0','1','0','0','30','0','30','0','1','76','','0','0','1');");
E_D("replace into `ubozb` values('79','0','0','img/79.jpg','鹿美子','http://zbup.jiaxinjiafang.com/mp4/848852c9-8ca6-4ddf-b154-f0b1eb677663.mp4','1993','大庆市','0.00','0','1','0','0','30','0','30','0','1','84','','0','0','1');");
E_D("replace into `ubozb` values('80','0','0','img/80.jpg','希饭尼','http://zbup.jiaxinjiafang.com/mp4/a02d15e4-8338-41ee-878c-de0a6dfa7953.mp4','1993','新乡市','0.00','0','0','0','0','30','0','30','0','1','100','','0','0','1');");
E_D("replace into `ubozb` values('81','0','0','img/81.jpg','银儿','http://zbup.jiaxinjiafang.com/mp4/5a0602ce-36bc-4cda-a6a3-6806566e7cc7.mp4','1993','七台河市','0.00','0','0','0','0','30','0','30','0','1','86','','0','0','1');");
E_D("replace into `ubozb` values('82','0','0','img/82.jpg','小妹','http://zbup.jiaxinjiafang.com/mp4/41216a99-3786-496a-8d40-d8a285e9d52a.mp4','1993','成都市','0.00','0','21','0','0','30','0','30','0','1','66','','0','0','1');");
E_D("replace into `ubozb` values('83','0','0','img/83.jpg','如若初见','http://zbup.jiaxinjiafang.com/mp4/dd29f7b4-40fd-45b0-b1e7-07e87d9c450a.mp4','1993','无锡市','0.00','0','1','0','0','30','0','30','0','1','88','','0','0','1');");
E_D("replace into `ubozb` values('84','0','0','img/84.jpg','水溶CC','http://zbup.jiaxinjiafang.com/mp4/25b93b3f-9753-44c0-b857-bb8fcca96ef8.mp4','1993','平顶山市','0.00','0','1','0','0','30','0','30','0','1','73','','0','0','1');");
E_D("replace into `ubozb` values('85','0','0','img/85.jpg','LInda女王','http://zbup.jiaxinjiafang.com/mp4/845e6dd8-d2bc-458b-bc4d-45d569174ed4.mp4','1993','六安市','0.00','0','0','0','0','30','2','0','0','1','85','','0','0','1');");
E_D("replace into `ubozb` values('86','0','0','img/86.jpg','九九','http://zbup.jiaxinjiafang.com/mp4/4b4fe49c-c7f5-4338-b1ab-abefd57904f1.mp4','1993','绍兴市','0.00','0','0','0','0','30','0','30','0','1','63','','0','0','1');");
E_D("replace into `ubozb` values('87','0','0','img/87.jpg','安妮','http://zbup.jiaxinjiafang.com/mp4/ed288d61-bb9c-4e59-ae5a-8d4e4b0b58f1.mp4','1993','宿迁市','0.00','0','0','0','0','30','0','30','0','1','91','','0','0','1');");
E_D("replace into `ubozb` values('88','0','0','img/88.jpg','糖果','http://zbup.jiaxinjiafang.com/mp4/f3483654-8661-4591-a45c-ae3630419161.mp4','1993','临沂市','0.00','10','0','0','0','30','3','0','0','0','97','','1497049201','0','1');");
E_D("replace into `ubozb` values('89','0','0','img/89.jpg','小蚊子','http://zbup.jiaxinjiafang.com/mp4/83232d14-e730-427a-a7c9-18916537367e.mp4','1993','南通市','0.00','0','1','0','0','30','2','0','0','1','88','','0','0','1');");
E_D("replace into `ubozb` values('90','0','0','img/90.jpg','小西','http://zbup.jiaxinjiafang.com/mp4/8596639f-9c3b-47c4-a5ba-ac9c66ad2dad.mp4','1993','南阳市','0.00','10','1','0','0','30','3','0','0','1','73','','1497078841','0','1');");
E_D("replace into `ubozb` values('94','0','0','d/szB8EFLD5XbY.jpg','静儿','http://dl.9ky.cc/0a41adfc-4dbb-4efa-afe3-3b3dbfbbb7d81.mp4','1993','成都市','0.00','10','20','0','0','30','15','0','1','0','87','','1499178601','0','1');");
E_D("replace into `ubozb` values('95','0','0','d/lfQGtzffDaAM.jpg','幽幽婉儿','http://z9.syasn.com/zb/zb254.mp4','1993','上海市','6.00','10','115','5','1','30','2','0','0','0','68','','1496927761','1','1');");
E_D("replace into `ubozb` values('97','0','0','d/m1UXRzTvX9cu.png','阿英','http://dl.9ky.cc/ay.mp4','1993','韩国','0.00','20','16','0','1','30','2','0','0','0','93','','1497069901','1','1');");
E_D("replace into `ubozb` values('105','0','0','d/GWCcIAuRUYjA.jpg','雪儿','','1993',NULL,'10.00','0','173','5','0','30','0','30','0','0','74',NULL,'0','1','1');");

require("../../inc/footer.php");
?>