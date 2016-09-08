<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_news_data_1`;");
E_C("CREATE TABLE `phome_ecms_news_data_1` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keyid` varchar(255) NOT NULL DEFAULT '',
  `dokey` tinyint(1) NOT NULL DEFAULT '0',
  `newstempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `closepl` tinyint(1) NOT NULL DEFAULT '0',
  `haveaddfen` tinyint(1) NOT NULL DEFAULT '0',
  `infotags` varchar(80) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_news_data_1` values('1','2','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('2','2','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('3','2','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('4','5','','1','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('5','5','','1','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('6','5','','1','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('7','5','','1','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('8','5','','1','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('9','5','','1','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('10','2','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('11','2','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('12','2','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('13','2','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('14','2','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('15','2','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('16','2','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('17','2','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('18','2','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('19','3','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('20','3','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('21','3','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('22','3','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('23','3','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('24','3','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('25','3','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('26','3','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('27','3','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('28','3','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('29','3','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('30','4','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('31','4','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('32','4','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('33','4','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('34','4','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('35','4','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('36','4','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('37','4','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('38','4','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('39','4','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('40','4','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('41','6','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('42','6','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('43','6','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('44','6','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('45','6','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('46','6','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('47','6','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('48','6','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('49','6','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('50','6','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('51','6','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('52','9','','1','11','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('53','9','','1','11','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('54','9','','1','11','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('55','9','','1','11','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('56','10','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('57','10','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('58','10','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('120','11','','1','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('61','11','','1','12','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('62','11','','1','12','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('63','11','','1','12','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('64','11','','1','12','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('66','11','','1','12','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('67','11','','1','12','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('68','11','','1','12','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('69','11','','1','12','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('70','11','','1','12','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('71','8','','1','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('72','12','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('73','12','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('121','12','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('75','12','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('76','12','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('77','7','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('78','7','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('79','7','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('80','7','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('81','7','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('82','7','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('83','7','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('84','7','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('85','7','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('86','7','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('87','7','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('122','13','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('123','13','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('124','13','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('125','13','','0','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('100','17','','1','12','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('101','17','','1','12','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('102','17','','1','12','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('103','17','','1','12','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('104','17','','1','12','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('105','17','','1','12','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('106','17','','1','12','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('107','17','','1','12','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('108','17','','1','12','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('109','17','','1','12','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('110','17','','1','12','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('111','17','','1','12','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('112','17','','1','12','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('113','17','','1','12','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('114','17','','1','12','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('115','17','','1','12','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('118','15','','1','0','0','0','');");
E_D("replace into `phome_ecms_news_data_1` values('119','16','','1','0','0','0','');");

@include("../../inc/footer.php");
?>