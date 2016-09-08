<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsclass`;");
E_C("CREATE TABLE `phome_enewsclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classname` varchar(50) NOT NULL DEFAULT '',
  `sonclass` text NOT NULL,
  `is_zt` tinyint(1) NOT NULL DEFAULT '0',
  `lencord` smallint(6) NOT NULL DEFAULT '0',
  `link_num` tinyint(4) NOT NULL DEFAULT '0',
  `newstempid` smallint(6) NOT NULL DEFAULT '0',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(6) NOT NULL DEFAULT '0',
  `featherclass` text NOT NULL,
  `islast` tinyint(1) NOT NULL DEFAULT '0',
  `classpath` text NOT NULL,
  `classtype` varchar(10) NOT NULL DEFAULT '',
  `newspath` varchar(20) NOT NULL DEFAULT '',
  `filename` tinyint(1) NOT NULL DEFAULT '0',
  `filetype` varchar(10) NOT NULL DEFAULT '',
  `openpl` tinyint(1) NOT NULL DEFAULT '0',
  `openadd` tinyint(1) NOT NULL DEFAULT '0',
  `newline` int(11) NOT NULL DEFAULT '0',
  `hotline` int(11) NOT NULL DEFAULT '0',
  `goodline` int(11) NOT NULL DEFAULT '0',
  `classurl` varchar(200) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `filename_qz` varchar(20) NOT NULL DEFAULT '',
  `hotplline` tinyint(4) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `firstline` tinyint(4) NOT NULL DEFAULT '0',
  `bname` varchar(50) NOT NULL DEFAULT '',
  `islist` tinyint(1) NOT NULL DEFAULT '0',
  `searchtempid` smallint(6) NOT NULL DEFAULT '0',
  `tid` smallint(6) NOT NULL DEFAULT '0',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `checkpl` tinyint(1) NOT NULL DEFAULT '0',
  `down_num` tinyint(4) NOT NULL DEFAULT '0',
  `online_num` tinyint(4) NOT NULL DEFAULT '0',
  `listorder` varchar(50) NOT NULL DEFAULT '',
  `reorder` varchar(50) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `classimg` varchar(255) NOT NULL DEFAULT '',
  `jstempid` smallint(6) NOT NULL DEFAULT '0',
  `addinfofen` int(11) NOT NULL DEFAULT '0',
  `listdt` tinyint(1) NOT NULL DEFAULT '0',
  `showclass` tinyint(1) NOT NULL DEFAULT '0',
  `showdt` tinyint(1) NOT NULL DEFAULT '0',
  `checkqadd` tinyint(1) NOT NULL DEFAULT '0',
  `qaddlist` tinyint(1) NOT NULL DEFAULT '0',
  `qaddgroupid` text NOT NULL,
  `qaddshowkey` tinyint(1) NOT NULL DEFAULT '0',
  `adminqinfo` tinyint(1) NOT NULL DEFAULT '0',
  `doctime` smallint(6) NOT NULL DEFAULT '0',
  `classpagekey` varchar(255) NOT NULL DEFAULT '',
  `dtlisttempid` smallint(6) NOT NULL DEFAULT '0',
  `classtempid` smallint(6) NOT NULL DEFAULT '0',
  `nreclass` tinyint(1) NOT NULL DEFAULT '0',
  `nreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `nrejs` tinyint(1) NOT NULL DEFAULT '0',
  `nottobq` tinyint(1) NOT NULL DEFAULT '0',
  `ipath` varchar(255) NOT NULL DEFAULT '',
  `addreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `haddlist` tinyint(4) NOT NULL DEFAULT '0',
  `sametitle` tinyint(1) NOT NULL DEFAULT '0',
  `definfovoteid` smallint(6) NOT NULL DEFAULT '0',
  `wburl` varchar(255) NOT NULL DEFAULT '',
  `qeditchecked` tinyint(1) NOT NULL DEFAULT '0',
  `wapstyleid` smallint(6) NOT NULL DEFAULT '0',
  `repreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `pltempid` smallint(6) NOT NULL DEFAULT '0',
  `cgroupid` text NOT NULL,
  `yhid` smallint(6) NOT NULL DEFAULT '0',
  `wfid` smallint(6) NOT NULL DEFAULT '0',
  `cgtoinfo` tinyint(1) NOT NULL DEFAULT '0',
  `bdinfoid` varchar(25) NOT NULL DEFAULT '',
  `repagenum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keycid` smallint(6) NOT NULL DEFAULT '0',
  `allinfos` int(10) unsigned NOT NULL DEFAULT '0',
  `infos` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`classid`),
  KEY `bclassid` (`bclassid`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsclass` values('1','0','首页','|','0','25','10','0','0','0','','0','','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','首页','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','/index.html','0','0','0','0','','0','0','0','','0','0','0','0','1469450858');");
E_D("replace into `phome_enewsclass` values('2','0','青春校园','','0','25','10','10','0','1','','1','school','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','青春校园','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','6','0','0','','0','0','0','0','','0','0','0','','0','0','12','12','1469453692');");
E_D("replace into `phome_enewsclass` values('3','0','青春创业','','0','25','10','10','0','1','','1','job','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','青春校园','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','6','0','0','','0','0','0','0','','0','0','0','','0','0','11','11','1469453709');");
E_D("replace into `phome_enewsclass` values('4','0','青春大赛','','0','25','10','10','0','1','','1','dasai','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','青春校园','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','6','0','0','','0','0','0','0','','0','0','0','','0','0','11','11','1469453723');");
E_D("replace into `phome_enewsclass` values('5','0','明星风采','','0','25','10','11','0','9','','1','star','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','9','1','10','青春校园','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','6','0','0','','0','0','0','0','','0','0','0','','0','0','6','6','1469453750');");
E_D("replace into `phome_enewsclass` values('6','0','青春旅游','','0','25','10','10','0','1','','1','laver','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','青春校园','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','6','0','0','','0','0','0','0','','0','0','0','','0','0','11','11','1469453764');");
E_D("replace into `phome_enewsclass` values('7','0','青春救助','','0','25','10','10','0','1','','1','jiuzhu','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','青春校园','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','6','0','0','','0','0','0','0','','0','0','0','','0','0','11','11','1469453781');");
E_D("replace into `phome_enewsclass` values('8','0','联系我们','','0','1','10','11','0','16','','1','contact-us','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','13','1','10','青春校园','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','16','1','0','0','0','0','','1','6','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1469453813');");
E_D("replace into `phome_enewsclass` values('9','0','合作媒体','','0','25','10','11','0','10','','1','hzmt','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','10','1','10','合作媒体','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','10','1','0','0','0','0','','1','6','0','0','','0','0','0','0','','0','0','0','','0','0','4','4','1469612197');");
E_D("replace into `phome_enewsclass` values('10','0','活动征集','','0','25','10','10','0','1','','1','hd-notice','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','11','1','10','活动征集','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','1','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','6','0','0','','0','0','0','0','','0','0','0','','0','0','3','3','1469613455');");
E_D("replace into `phome_enewsclass` values('11','0','公司新闻','','0','10','10','12','0','11','','1','news','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','12','1','10','最新动态','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','11','1','0','0','0','0','','1','6','0','0','','0','0','0','0','','0','0','0','','0','0','12','12','1469614363');");
E_D("replace into `phome_enewsclass` values('12','0','焦点图管理','','0','25','10','10','0','1','','1','focus','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','14','1','10','焦点图管理','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','1','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','5','5','1469616462');");
E_D("replace into `phome_enewsclass` values('13','0','合作单位','','0','25','10','10','0','17','','1','foot-team','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','15','1','10','焦点图管理','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','1','0','0','0','','0','0','0','','17','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','4','4','1469860904');");
E_D("replace into `phome_enewsclass` values('14','0','管理中心','','0','5','10','12','0','14','','1','manage-center','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','16','1','10','管理中心','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','14','1','0','0','0','0','','1','6','0','0','','0','0','0','0','','0','0','0','','0','0','8','8','1469865351');");
E_D("replace into `phome_enewsclass` values('15','0','采编中心','','0','1','10','10','0','13','','1','cai-bian','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','13','1','10','管理中心','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','13','1','0','0','0','0','','1','6','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1469868208');");
E_D("replace into `phome_enewsclass` values('16','0','公司简介','','0','1','10','10','0','13','','1','about-company','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','13','1','10','管理中心','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','13','1','0','0','0','0','','1','6','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1469868260');");
E_D("replace into `phome_enewsclass` values('17','0','团队介绍','','0','9','10','12','0','15','','1','myteam','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','17','1','10','青春校园','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','15','1','0','0','0','0','','1','6','0','0','','0','0','0','0','','0','0','0','','0','0','16','16','1469868294');");

@include("../../inc/footer.php");
?>