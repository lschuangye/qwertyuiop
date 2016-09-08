<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsinfotype`;");
E_C("CREATE TABLE `phome_enewsinfotype` (
  `typeid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tname` varchar(30) NOT NULL DEFAULT '',
  `mid` smallint(6) NOT NULL DEFAULT '0',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `yhid` smallint(6) NOT NULL DEFAULT '0',
  `tnum` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `listtempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `tpath` varchar(100) NOT NULL DEFAULT '',
  `ttype` varchar(10) NOT NULL DEFAULT '',
  `maxnum` int(10) unsigned NOT NULL DEFAULT '0',
  `reorder` varchar(50) NOT NULL DEFAULT '',
  `tid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `timg` varchar(200) NOT NULL DEFAULT '',
  `intro` varchar(255) NOT NULL DEFAULT '',
  `pagekey` varchar(255) NOT NULL DEFAULT '',
  `newline` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `hotline` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `goodline` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `hotplline` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `firstline` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `jstempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `nrejs` tinyint(1) NOT NULL DEFAULT '0',
  `listdt` tinyint(1) NOT NULL DEFAULT '0',
  `repagenum` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`typeid`),
  KEY `mid` (`mid`),
  KEY `myorder` (`myorder`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsinfotype` values('1','婚庆行业','15','0','0','25','11','t/hq','.html','0','newstime DESC','1','news','','','','10','10','10','10','10','1','0','0','0');");
E_D("replace into `phome_enewsinfotype` values('2','旅游行业','15','0','0','25','11','t/ly','.html','0','newstime DESC','1','news','','','','10','10','10','10','10','1','0','0','0');");
E_D("replace into `phome_enewsinfotype` values('3','医疗行业','15','0','0','25','11','t/yl','.html','0','newstime DESC','1','news','','','','10','10','10','10','10','1','0','0','0');");
E_D("replace into `phome_enewsinfotype` values('4','教育行业','15','0','0','25','11','t/jy','.html','0','newstime DESC','1','news','','','','10','10','10','10','10','1','0','0','0');");
E_D("replace into `phome_enewsinfotype` values('5','美容行业','15','0','0','25','11','t/mr','.html','0','newstime DESC','1','news','','','','10','10','10','10','10','1','0','0','0');");
E_D("replace into `phome_enewsinfotype` values('6','装修行业','15','0','0','25','11','t/zx','.html','0','newstime DESC','1','news','','','','10','10','10','10','10','1','0','0','0');");

@include("../../inc/footer.php");
?>