<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_news_index`;");
E_C("CREATE TABLE `phome_ecms_news_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=126 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_news_index` values('1','2','1','1469608096','1469608539','1469611360','1');");
E_D("replace into `phome_ecms_news_index` values('2','2','1','1469608868','1469608963','1469611299','1');");
E_D("replace into `phome_ecms_news_index` values('3','2','1','1469608965','1469609409','1469611206','1');");
E_D("replace into `phome_ecms_news_index` values('4','5','1','1469610277','1469609983','1469610277','1');");
E_D("replace into `phome_ecms_news_index` values('5','5','1','1469610418','1469610418','1469610418','1');");
E_D("replace into `phome_ecms_news_index` values('6','5','1','1469610885','1469610885','1469610885','1');");
E_D("replace into `phome_ecms_news_index` values('7','5','1','1469610953','1469610953','1469610953','1');");
E_D("replace into `phome_ecms_news_index` values('8','5','1','1469611024','1469611024','1469611024','1');");
E_D("replace into `phome_ecms_news_index` values('9','5','1','1469611145','1469611145','1469611145','1');");
E_D("replace into `phome_ecms_news_index` values('10','2','1','1469608096','1469611682','1469611682','1');");
E_D("replace into `phome_ecms_news_index` values('11','2','1','1469608868','1469611682','1469611682','1');");
E_D("replace into `phome_ecms_news_index` values('12','2','1','1469608965','1469611682','1469611682','1');");
E_D("replace into `phome_ecms_news_index` values('13','2','1','1469608096','1469611687','1469611687','1');");
E_D("replace into `phome_ecms_news_index` values('14','2','1','1469608868','1469611687','1469611687','1');");
E_D("replace into `phome_ecms_news_index` values('15','2','1','1469608965','1469611687','1469611687','1');");
E_D("replace into `phome_ecms_news_index` values('16','2','1','1469608096','1469611687','1469611687','1');");
E_D("replace into `phome_ecms_news_index` values('17','2','1','1469608868','1469611687','1469611687','1');");
E_D("replace into `phome_ecms_news_index` values('18','2','1','1471573234','1469611687','1471574063','1');");
E_D("replace into `phome_ecms_news_index` values('19','3','1','1469608096','1469611734','1469611734','1');");
E_D("replace into `phome_ecms_news_index` values('20','3','1','1469608868','1469611734','1469611734','1');");
E_D("replace into `phome_ecms_news_index` values('21','3','1','1469608965','1469611734','1469611734','1');");
E_D("replace into `phome_ecms_news_index` values('22','3','1','1469608096','1469611734','1469611734','1');");
E_D("replace into `phome_ecms_news_index` values('23','3','1','1469608868','1469611734','1469611734','1');");
E_D("replace into `phome_ecms_news_index` values('24','3','1','1469608965','1469611734','1469611734','1');");
E_D("replace into `phome_ecms_news_index` values('25','3','1','1469608096','1469611734','1469611734','1');");
E_D("replace into `phome_ecms_news_index` values('26','3','1','1469608868','1469611734','1469611734','1');");
E_D("replace into `phome_ecms_news_index` values('27','3','1','1469608965','1469611734','1469611734','1');");
E_D("replace into `phome_ecms_news_index` values('28','3','1','1469608868','1469611755','1469611755','1');");
E_D("replace into `phome_ecms_news_index` values('29','3','1','1469608096','1469611755','1469611755','1');");
E_D("replace into `phome_ecms_news_index` values('30','4','1','1469608096','1469611783','1469611783','1');");
E_D("replace into `phome_ecms_news_index` values('31','4','1','1469608868','1469611783','1469611783','1');");
E_D("replace into `phome_ecms_news_index` values('32','4','1','1469608965','1469611783','1469611783','1');");
E_D("replace into `phome_ecms_news_index` values('33','4','1','1469608096','1469611783','1469611783','1');");
E_D("replace into `phome_ecms_news_index` values('34','4','1','1469608868','1469611783','1469611783','1');");
E_D("replace into `phome_ecms_news_index` values('35','4','1','1469608965','1469611783','1469611783','1');");
E_D("replace into `phome_ecms_news_index` values('36','4','1','1469608096','1469611783','1469611783','1');");
E_D("replace into `phome_ecms_news_index` values('37','4','1','1469608868','1469611783','1469611783','1');");
E_D("replace into `phome_ecms_news_index` values('38','4','1','1469608965','1469611783','1469611783','1');");
E_D("replace into `phome_ecms_news_index` values('39','4','1','1469608868','1469611783','1469611783','1');");
E_D("replace into `phome_ecms_news_index` values('40','4','1','1469608096','1469611783','1469611783','1');");
E_D("replace into `phome_ecms_news_index` values('41','6','1','1469608096','1469611797','1469611797','1');");
E_D("replace into `phome_ecms_news_index` values('42','6','1','1469608868','1469611797','1469611797','1');");
E_D("replace into `phome_ecms_news_index` values('43','6','1','1469608965','1469611797','1469611797','1');");
E_D("replace into `phome_ecms_news_index` values('44','6','1','1469608096','1469611797','1469611797','1');");
E_D("replace into `phome_ecms_news_index` values('45','6','1','1469608868','1469611797','1469611797','1');");
E_D("replace into `phome_ecms_news_index` values('46','6','1','1469608965','1469611797','1469611797','1');");
E_D("replace into `phome_ecms_news_index` values('47','6','1','1469608096','1469611797','1469611797','1');");
E_D("replace into `phome_ecms_news_index` values('48','6','1','1469608868','1469611797','1469611797','1');");
E_D("replace into `phome_ecms_news_index` values('49','6','1','1469608965','1469611797','1469611797','1');");
E_D("replace into `phome_ecms_news_index` values('50','6','1','1469608868','1469611797','1469611797','1');");
E_D("replace into `phome_ecms_news_index` values('51','6','1','1469608096','1469611797','1469611797','1');");
E_D("replace into `phome_ecms_news_index` values('52','9','1','1469612287','1469612287','1469612287','1');");
E_D("replace into `phome_ecms_news_index` values('53','9','1','1469612465','1469612465','1469612465','1');");
E_D("replace into `phome_ecms_news_index` values('54','9','1','1469612590','1469612590','1469612590','1');");
E_D("replace into `phome_ecms_news_index` values('55','9','1','1469612676','1469612676','1469612676','1');");
E_D("replace into `phome_ecms_news_index` values('56','10','1','1469613820','1469613820','1469613820','1');");
E_D("replace into `phome_ecms_news_index` values('57','10','1','1469613872','1469613872','1469613872','1');");
E_D("replace into `phome_ecms_news_index` values('58','10','1','1469613888','1469613888','1469613888','1');");
E_D("replace into `phome_ecms_news_index` values('120','11','1','1471245604','1471245858','1471247349','1');");
E_D("replace into `phome_ecms_news_index` values('61','11','1','1469614793','1469614807','1469614807','1');");
E_D("replace into `phome_ecms_news_index` values('62','11','1','1469614793','1469614821','1469614827','1');");
E_D("replace into `phome_ecms_news_index` values('63','11','1','1469614793','1469614849','1469614875','1');");
E_D("replace into `phome_ecms_news_index` values('64','11','1','1469614793','1469614849','1469614861','1');");
E_D("replace into `phome_ecms_news_index` values('66','11','1','1469614747','1469614884','1469614884','1');");
E_D("replace into `phome_ecms_news_index` values('67','11','1','1469614793','1469614884','1469614930','1');");
E_D("replace into `phome_ecms_news_index` values('68','11','1','1469614793','1469614884','1469614918','1');");
E_D("replace into `phome_ecms_news_index` values('69','11','1','1469614793','1469614884','1469614908','1');");
E_D("replace into `phome_ecms_news_index` values('70','11','1','1469614793','1469614884','1469614897','1');");
E_D("replace into `phome_ecms_news_index` values('71','8','1','1471336532','1469616045','1471336532','1');");
E_D("replace into `phome_ecms_news_index` values('72','12','1','1471579759','1469616854','1471593082','1');");
E_D("replace into `phome_ecms_news_index` values('73','12','1','1471585882','1469616896','1471593151','1');");
E_D("replace into `phome_ecms_news_index` values('121','12','1','1471587752','1471588036','1471592604','1');");
E_D("replace into `phome_ecms_news_index` values('75','12','1','1471589347','1469616988','1471590033','1');");
E_D("replace into `phome_ecms_news_index` values('76','12','1','1471586082','1469617022','1471591782','1');");
E_D("replace into `phome_ecms_news_index` values('77','7','1','1469608096','1469617305','1469617305','1');");
E_D("replace into `phome_ecms_news_index` values('78','7','1','1469608868','1469617305','1469617305','1');");
E_D("replace into `phome_ecms_news_index` values('79','7','1','1469608965','1469617305','1469617305','1');");
E_D("replace into `phome_ecms_news_index` values('80','7','1','1469608096','1469617305','1469617305','1');");
E_D("replace into `phome_ecms_news_index` values('81','7','1','1469608868','1469617305','1469617305','1');");
E_D("replace into `phome_ecms_news_index` values('82','7','1','1469608965','1469617305','1469617305','1');");
E_D("replace into `phome_ecms_news_index` values('83','7','1','1469608096','1469617305','1469617305','1');");
E_D("replace into `phome_ecms_news_index` values('84','7','1','1469608868','1469617305','1469617305','1');");
E_D("replace into `phome_ecms_news_index` values('85','7','1','1469608965','1469617305','1469617305','1');");
E_D("replace into `phome_ecms_news_index` values('86','7','1','1469608868','1469617305','1469617305','1');");
E_D("replace into `phome_ecms_news_index` values('87','7','1','1469608096','1469617305','1469617305','1');");
E_D("replace into `phome_ecms_news_index` values('125','13','1','1471771362','1471771362','1471771362','1');");
E_D("replace into `phome_ecms_news_index` values('124','13','1','1471771338','1471771338','1471771338','1');");
E_D("replace into `phome_ecms_news_index` values('123','13','1','1471771293','1471771293','1471771293','1');");
E_D("replace into `phome_ecms_news_index` values('122','13','1','1471771305','1471771203','1471771305','1');");
E_D("replace into `phome_ecms_news_index` values('100','17','1','1469868889','1469868889','1469868889','1');");
E_D("replace into `phome_ecms_news_index` values('101','17','1','0','1469868895','1469868895','1');");
E_D("replace into `phome_ecms_news_index` values('102','17','1','0','1469868901','1469868901','1');");
E_D("replace into `phome_ecms_news_index` values('103','17','1','0','1469868901','1469868901','1');");
E_D("replace into `phome_ecms_news_index` values('104','17','1','0','1469868907','1469868907','1');");
E_D("replace into `phome_ecms_news_index` values('105','17','1','0','1469868907','1469868907','1');");
E_D("replace into `phome_ecms_news_index` values('106','17','1','0','1469868907','1469868907','1');");
E_D("replace into `phome_ecms_news_index` values('107','17','1','0','1469868907','1469868907','1');");
E_D("replace into `phome_ecms_news_index` values('108','17','1','0','1469868920','1469868920','1');");
E_D("replace into `phome_ecms_news_index` values('109','17','1','0','1469868920','1469868920','1');");
E_D("replace into `phome_ecms_news_index` values('110','17','1','0','1469868920','1469868920','1');");
E_D("replace into `phome_ecms_news_index` values('111','17','1','0','1469868920','1469868920','1');");
E_D("replace into `phome_ecms_news_index` values('112','17','1','0','1469868920','1469868920','1');");
E_D("replace into `phome_ecms_news_index` values('113','17','1','0','1469868920','1469868920','1');");
E_D("replace into `phome_ecms_news_index` values('114','17','1','0','1469868920','1469868920','1');");
E_D("replace into `phome_ecms_news_index` values('115','17','1','0','1469868920','1469868920','1');");
E_D("replace into `phome_ecms_news_index` values('118','15','1','1470032257','1469870297','1470032257','1');");
E_D("replace into `phome_ecms_news_index` values('119','16','1','1470118163','1469870342','1470118163','1');");

@include("../../inc/footer.php");
?>