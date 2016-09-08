<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsfile_public`;");
E_C("CREATE TABLE `phome_enewsfile_public` (
  `fileid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` tinyint(1) NOT NULL DEFAULT '0',
  `filename` char(60) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `path` char(20) NOT NULL DEFAULT '',
  `adduser` char(30) NOT NULL DEFAULT '',
  `filetime` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` tinyint(1) NOT NULL DEFAULT '0',
  `no` char(60) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `onclick` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `cjid` int(10) unsigned NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  `modtype` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `modtype` (`modtype`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsfile_public` values('1','0','519a641421107fa187f8d22098b23aeb.jpg','50155','','administrator','1469679341','0','q.jpg','1','0','0','0','2','0');");
E_D("replace into `phome_enewsfile_public` values('2','0','507610fdbc64d8ed1dc5021b49dda82d.jpg','45959','','administrator','1469680134','0','w.jpg','1','0','0','0','2','0');");
E_D("replace into `phome_enewsfile_public` values('3','0','2aa1abb7debd6f0564b683e765594b50.jpg','156721','','administrator','1469682036','0','bg_banner.qingchu.jpg','1','0','0','0','2','0');");
E_D("replace into `phome_enewsfile_public` values('4','0','8e4e53d801c13e53a21e9bc7cb42abe2.ico','23011','','administrator','1471412313','0','favicon.ico','1','0','0','0','2','0');");
E_D("replace into `phome_enewsfile_public` values('5','0','2e3ee1d65d57becad10dd8356d4c4862.jpg','16292','','administrator','1471422957','0','logo2.jpg','1','0','0','0','2','0');");

@include("../../inc/footer.php");
?>