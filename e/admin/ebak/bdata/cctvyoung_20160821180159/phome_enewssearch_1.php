<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewssearch`;");
E_C("CREATE TABLE `phome_enewssearch` (
  `searchid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `keyboard` varchar(255) NOT NULL DEFAULT '',
  `searchtime` int(10) unsigned NOT NULL DEFAULT '0',
  `searchclass` varchar(255) NOT NULL DEFAULT '',
  `result_num` int(10) unsigned NOT NULL DEFAULT '0',
  `searchip` varchar(20) NOT NULL DEFAULT '',
  `classid` varchar(255) NOT NULL DEFAULT '',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `orderby` varchar(30) NOT NULL DEFAULT '0',
  `myorder` tinyint(1) NOT NULL DEFAULT '0',
  `checkpass` varchar(32) NOT NULL DEFAULT '',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `tempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `iskey` tinyint(1) NOT NULL DEFAULT '0',
  `andsql` text NOT NULL,
  `trueclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`searchid`),
  KEY `checkpass` (`checkpass`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewssearch` values('1','亮相重庆','1471491939','title,newstext','1','119.4.174.55','11','1','newstime','0','207379384297e6dd5cb0f5f2e41f209a','news','0','0',' and classid=''11'' and ((title LIKE ''%亮相重庆%'') or (newstext LIKE ''%亮相重庆%''))','11');");
E_D("replace into `phome_enewssearch` values('2','罹难陆客','1471493799','title,newstext','1','119.4.174.55','11','1','newstime','0','7aa12ed7077971772633ec75667db3f4','news','0','0',' and classid=''11'' and ((title LIKE ''%罹难陆客%'') or (newstext LIKE ''%罹难陆客%''))','11');");
E_D("replace into `phome_enewssearch` values('3','全给民进�\�','1471771544','title,newstext','2','118.113.134.179','11','1','newstime','0','bf97baa59d1b9f37f5f5cbfbd78f5d8e','news','0','0',' and classid=''11'' and ((title LIKE ''%全给民进�\�%'') or (newstext LIKE ''%全给民进�\�%''))','11');");

@include("../../inc/footer.php");
?>