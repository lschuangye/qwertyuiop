<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewslog`;");
E_C("CREATE TABLE `phome_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewslog` values('1','administrator','2016-07-24 14:55:17','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('2','administrator','2016-07-25 20:44:28','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('3','administrator','2016-07-26 12:07:04','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('4','administrator','2016-07-26 15:37:35','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('5','administrator','2016-07-27 14:03:28','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('6','administrator','2016-07-27 19:13:40','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('7','administrator','2016-07-27 19:39:18','125.39.30.192','1','','0');");
E_D("replace into `phome_enewslog` values('8','administrator','2016-07-28 11:19:52','222.212.29.6','1','','0');");
E_D("replace into `phome_enewslog` values('9','admin','2016-07-28 11:37:17','171.214.239.121','0','','0');");
E_D("replace into `phome_enewslog` values('10','admin','2016-07-28 11:42:47','171.214.239.121','0','','0');");
E_D("replace into `phome_enewslog` values('11','administrator','2016-07-28 12:14:59','222.211.175.192','1','','0');");
E_D("replace into `phome_enewslog` values('12','administrator','2016-07-28 13:22:51','222.211.175.172','1','','0');");
E_D("replace into `phome_enewslog` values('13','administrator','2016-07-28 15:12:47','125.70.175.246','1','','0');");
E_D("replace into `phome_enewslog` values('14','administrator','2016-07-28 16:39:17','110.184.49.74','1','','0');");
E_D("replace into `phome_enewslog` values('15','administrator','2016-07-28 22:01:08','171.214.207.167','1','','0');");
E_D("replace into `phome_enewslog` values('16','administrator','2016-07-30 14:14:26','118.113.134.181','1','','0');");
E_D("replace into `phome_enewslog` values('17','administrator','2016-08-01 12:02:45','110.184.48.89','1','','0');");
E_D("replace into `phome_enewslog` values('18','administrator','2016-08-01 12:50:36','61.139.22.195','1','','0');");
E_D("replace into `phome_enewslog` values('19','administrator','2016-08-02 13:55:15','110.184.48.89','1','','0');");
E_D("replace into `phome_enewslog` values('20','administrator','2016-08-04 17:15:18','222.211.209.234','1','','0');");
E_D("replace into `phome_enewslog` values('21','administrator','2016-08-05 17:03:23','42.81.42.24','1','','0');");
E_D("replace into `phome_enewslog` values('22','administrator','2016-08-05 17:25:43','222.211.209.234','1','','0');");
E_D("replace into `phome_enewslog` values('23','administrator','2016-08-05 17:26:53','42.81.42.24','1','','0');");
E_D("replace into `phome_enewslog` values('24','administrator','2016-08-05 17:27:17','222.211.209.234','1','','0');");
E_D("replace into `phome_enewslog` values('25','administrator','2016-08-05 17:30:51','42.81.42.24','1','','0');");
E_D("replace into `phome_enewslog` values('26','administrator','2016-08-09 14:52:17','182.150.163.231','1','','0');");
E_D("replace into `phome_enewslog` values('27','administrator','2016-08-13 14:17:03','171.221.129.118','1','','0');");

@include("../../inc/footer.php");
?>